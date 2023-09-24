<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Service\VIPServiceType;
use App\Models\Service\VipService;
use App\Models\Investment\ShareHolder;

use DataTables;



class VIPServiceController extends Controller
{
    // VIP Service Page
    public function VIPServiepage()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("VIP_services_page"))
        {
            return view("errors.role_permission_error");
        }
        return view("services.VIP_Service");
    }
    public function registerVIPService(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("VIP_services_registration"))
        {
            return view("errors.role_permission_error");
        }
        $validator = Validator::make($request->all(), [
            'service' => 'required|string|max:255',
            'created_by'=>'required|exists:users,id',
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $existingVIPServType = VIPServiceType::where('service', $request->service)->first();

        if ($existingVIPServType) 
        {
            return response()->json(['errors' => ['name' => ['VIP Service with the same name already exists.']]], 422);
        }
        VIPServiceType::create(['service' => $request->service,'added_by' => $request->created_by]);
        return response()->json(['message' => 'VIP Service registered successfully']);
    }
    public function getVIPService()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("list_of_VIP_services"))
        {
            return view("errors.role_permission_error");
        }
        $VIPServicType = VIPServiceType::select('id', 'service')->get();
        return DataTables::of($VIPServicType)   
            ->make(true);
    }
    public function update_VIPService(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("update_VIP_services"))
        {
            return view("errors.role_permission_error");
        }
        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required',
        ]);
        $Data=['service'=>$validatedData['name']];
        $id=($validatedData['id']);
        $item = VIPServiceType::findOrFail($id);
        $result = $item->update($Data);
        return response()->json(['message' => 'VIP Service is updated successfully']); 
    }
    public function destroyVIPService(Request $request,$id)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("delete_VIP_services"))
        {
            return view("errors.role_permission_error");
        }
        try 
            {
                VIPServiceType::destroy($id);
                return response()->json(['message' => 'VIP Service is deleted successfully']);
            } 
        catch (QueryException $e) 
            {
                return response()->json(['errors' => ['name' => ['Error to Delete VIP Service.']]], 422);
            }
         catch (\Exception $e) 
            {
                return response()->json(['errors' => ['name' => ['Error to Delete VIP Service.']]], 422);
            }
    }
    public function VIPServiceRequest()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("investor_vip_request"))
        {
            return view("errors.role_permission_error");
        }
        $VipService = new VIPServiceType();
        $loggedInUserId = Auth::id();
        $vipServices = VipService::with([
            'ServiceType', 
            'Investment', 
            'Customer', 
            'ReviewedBy', 
            'ApprovedBy' 
        ])->where('customer_id', $loggedInUserId)->get();
        $VipServiceTypeData = $VipService->getIdAndService();
        $user = Auth::user();
        $userId = $user->id;
        $shareholder = new ShareHolder();
        $investments = $shareholder->getIdAndInvestmentIdByCustomerId($userId);
       
        return view("services.VIP_Service_request",compact('investments', 'VipServiceTypeData','vipServices'));
    }
    public function PostVIPServiceRequest(Request $request)
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("investor_vip_request"))
        {
            return view("errors.role_permission_error");
        }  
        $validator = $request->validate([
            'landing_date' => 'required',
            'service_type_id' => 'required|exists:vip_service_type,id',
            //'investment' => 'required|exists:shareholders,id',
            'customer_id'=>'required|exists:users,id',
            'letter_code_id' => 'required|exists:letter_code,id',

        ]);
        $VipRequestData = $request->validate([
            'landing_date' => 'required',
            'service_type_id' => 'required|exists:vip_service_type,id',
            'customer_id'=>'required|exists:users,id',

        ]);
        $letterData = [
            'letter_code_id' => $request->letter_code_id,
            'letter_identifier'=>'0',
            'view_status'=>'0',
            'comment'=>'0',
            'letter_path'=>'0',
           // 'investor_sender_id' => $request->created_by,
        ];
        // Save the letter and get the auto-generated ID
        $vipService = new VipService();
        $letterId = $vipService->saveLetterAndGetId($letterData);
        $requestData = array_merge($VipRequestData, [
            'letter_id' => $letterId,
        ]);
        $vipServiceId = $vipService->saveVipService($requestData);

        // TO SAVE DATA ON VIPSERVICELETTER TABLE
        $DataToVipServiceLetter = array_merge([
            'vip_service_id ' => $vipServiceId,
        ], [
            'letter_id' => $letterId,
        ]);
        $VIPServiceLetter = new VipServiceLetter();
        $VIPServiceLetter->saveVipServiceLetter($DataToVipServiceLetter);

    }
    public function ViewVIPServiceRequest()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("list_of_VIP_services"))
        {
            return view("errors.role_permission_error");
        }
        // Fetch all VipService records with the related data
        $loggedInUserId = Auth::id();
        $vipServices = VipService::with([
            'ServiceType', 
            'Investment', 
            'Customer', 
            'ReviewedBy', 
            'ApprovedBy' 
        ])->where('customer_id', $loggedInUserId)->get();
        // Format the data for the datatable
        $dataTableData = [];
        if ($vipServices->isEmpty()) {
            $dataTableData = [];
        }
        else{

        foreach ($vipServices as $vipService) {
            $dataTableData[] = [
                'id' => $vipService->id,
                'service_type' => $vipService->ServiceType->service,
                'investment_id' => $vipService->getCompanyName(), 
                'customer_id' => $vipService->getCustomerName(), 
                'landing_date' => $vipService->landing_date,
                'letter_id' => $vipService->letter_id,
                'reviewed_by' => $vipService->getReviewedByName(), 
                'review_status' => $vipService->review_status,
                'approved_by' => $vipService->getApprovedByName(), 
                'approve_status' => $vipService->approve_status,
                'approved_date' => $vipService->approved_date,
            ];
        }
    }

        // Return the data as a JSON response for the datatable
        return DataTables::of($dataTableData)->toJson();
    }

}


