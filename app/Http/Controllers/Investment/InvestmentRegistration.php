<?php

namespace App\Http\Controllers\Investment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investment\InvestmentType;
use App\Models\Investment\Shareholder;
use App\Models\Base\Region;
use App\Models\Base\Zone;
use App\Models\Base\Woreda;
use App\Models\Base\MeasurementUnit;
use App\Models\Investment\RawMaterial;
use App\Models\Investment\CompanyName;
use App\Models\Investment\InvestmentActivities;
use App\Models\Investment\ImpactMitigation;
use App\Models\Investment\InvestmentDocument;
use App\Models\Investment\InvestmentAddress;
use App\Models\Investment\InvestmentDetail;
use App\Models\Investment\AnnualProduction;
use App\Models\Actor\Customer;
use App\Models\Actor\Company_representative;
use App\Models\Actor\Investors;
use App\Models\Base\Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;





class InvestmentRegistration extends Controller
{
    public function displayInvestmentRegistrationPage()
    {
       /*  if(!Auth::user() || !Auth::user()->hasPermissionWithName("Investment_registration_page"))
        {
            return view("errors.role_permission_error");
        } */
        // ShareHolder
        $shareholderInfo = new ShareHolder();
        $shareholders =  $shareholderInfo->CustomerNameandId();
        // Investment Type
       /*  $investmentType = new InvestmentType();
        $InvestmentTypes = $investmentType->InvestmentTypeNameandId('BT'); */
        //Business Area
     /*    $BusinessType = new InvestmentType();
        $BusinessTypes = $investmentType->InvestmentTypeNameandId('BA'); */

         // Item
         $Item = new Item();
         $Items = $Item->getItem_or_material('IR');
         //Material
         $Material = new Item();
         $Materials = $Item->getItem_or_material('MR');

        $RegionInfo = new Region();
        $Regions =  $RegionInfo->RegionNameandId();
        
        // Measurements
        $Measurementsinfo = new MeasurementUnit();
        $Measurements = $Measurementsinfo->MeasurementNameandId();

        // Zone
        $ZoneInfo = new Zone();
        $Zones =  $ZoneInfo->ZoneNameandId();
        // Woreda
        $WoredaInfo = new Woreda();
        $Woredas =  $WoredaInfo->WoredaNameandId();

        //For manager
        $managers = Investors::with('user')->get();
        return view("Investment.InvestmentRegistration",compact('Measurements','Items','Materials','shareholders','Regions','Woredas','Zones','managers'));
    }
    public function getzonesbyRegionID(Request $request,$id)
    {
       $zoneInfo = new Zone();
       $Zones =  $zoneInfo->ZoneNameAndIdByRegion($id);
       return response()->json($Zones);

    }
    public function getworedasbyZoneID(Request $request,$id)
    {
       $woredaInfo = new Woreda();
       $Woredas =  $woredaInfo->WoredaNameAndIdByZone($id);
       return response()->json($Woredas);
    }
    public function RequestInvestmentRegistration(Request $request)
    {
        $formData1 = $request->input('formData1');
        $formData2 = $request->input('formData2');
        $formData3 = $request->input('formData3');
        $formData4 = $request->input('RawMaterial_info');
        $attached_file = $request->input('file');
        $userId = Auth::user()->id;
       // $Length = count($formData2);

            $validationRules1 = [
                'companyName1' => 'required',
                'companyName2' => 'required',
                'companyName3' => 'required',
                'tradeName' => 'required',
                'tinNumber' => 'required',
                'generalManager' => 'required',
                'typeOfOwnership' => 'required',
                'businessForm' => 'required',
                'fieldOfBusiness' => 'required',
                'businessRegion' => 'required',
                'businessZone' => 'required',
                'businessWoreda' => 'required',
                'houseNumber' => 'required',
                'poBox' => 'required',
                'telephone' => 'required',
                'fax' => 'required',
                'email' => 'required|email',
                'Authorized_PersonId' => 'required',
                'telephone_1' => 'required',
                'telephone_2' => 'required',
                'authorized_email' => 'required|email',
                'investmentRegion' => 'required',
                'investmentZone' => 'required',
                'investmentWoreda' => 'required',
                'investmentHouseNumber' => 'required',
                'investmentPoBox' => 'required',
                'investmentTelephone' => 'required',
                'investmentFax' => 'required',
                'investmentemail' => 'required|email',
                'projectObjective' => 'required',
                'landRequirement' => 'required',
                'electricRequirement' => 'required',
                'waterutility' => 'required',
                'internetutility' => 'required',
                'otherutility' => 'required',
                'usaDollar' => 'required',
                'ethiopianBirr' => 'required',
                'equity' => 'required',
                'loan' => 'required',
                'exportValue' => 'required',
                'local' => 'required',
                'permanentEmployee' => 'required',
                'potentialImpact' => 'required',
                'mitigationPlan' => 'required',
                'source_info' => 'required',
            ];

            // Validate the formData1
            $validator1 = Validator::make($formData1, $validationRules1);

            if ($validator1->fails()) {
                return response()->json(['errors' => $validator1->errors()], 400);
            }

            // CHECK FIL
    
    // Rest of your data processing and saving code
    // ...
            $rules = [];
            $messages = [];

            // Define validation rules for each activity
            foreach ($formData2 as $activityKey => $activity) {
                $rules["formData2.$activityKey.value"] = 'required'; // Adjust the rule as needed
                $rules["formData2.$activityKey.type"] = 'required'; // Adjust the rule as needed

                // Optionally, define custom error messages
                $messages["formData2.$activityKey.value.required"] = "Value for $activityKey is required.";
                $messages["formData2.$activityKey.type.required"] = "Type for $activityKey is required.";
            }

            // Validate the form data
            $validator2 = Validator::make($request->all(), $rules, $messages);

            if ($validator2->fails()) {
                // Validation failed, return error messages
                return response()->json(['errors' => $validator2->errors()], 422);
            }

            $rules2 = [];
            $messages2 = [];

            // Define validation rules for each product data
            foreach ($formData3 as $index => $ProductDataValidate) {
                $rules2["Product_info.$index.PName"] = 'required'; // Adjust the rule as needed
                $rules2["Product_info.$index.unit"] = 'required'; // Adjust the rule as needed
                $rules2["Product_info.$index.quantity"] = 'required|numeric'; // Adjust the rule as needed
                $rules2["Product_info.$index.localMarketShare"] = 'required|numeric'; // Adjust the rule as needed
                $rules2["Product_info.$index.exportMarketShare"] = 'required|numeric'; // Adjust the rule as needed

                // Optionally, define custom error messages
                $messages2["Product_info.$index.PName.required"] = "Product name for entry $index is required.";
                $messages2["Product_info.$index.unit.required"] = "Unit for entry $index is required.";
                $messages2["Product_info.$index.quantity.required"] = "Quantity for entry $index is required.";
                $messages2["Product_info.$index.quantity.numeric"] = "Quantity for entry $index must be a number.";
                // ... Similar messages for other fields ...
            }

            // Validate the product data
            $validator3 = Validator::make($request->all(), $rules, $messages);

            if ($validator3->fails()) {
                // Validation failed, return error messages
                return response()->json(['errors' => $validator3->errors()], 422);
            }

            $rules3 = [];
            $messages3 = [];

            // Define validation rules for each raw material data
            foreach ($formData4 as $index => $rawMaterialData) {
                $rules3["RawMaterial_info.$index.RMaterialName"] = 'required'; // Adjust the rule as needed
                $rules3["RawMaterial_info.$index.unit"] = 'required'; // Adjust the rule as needed
                $rules3["RawMaterial_info.$index.quantity"] = 'required|numeric'; // Adjust the rule as needed
                $rules3["RawMaterial_info.$index.localPercent"] = 'required|numeric'; // Adjust the rule as needed
                $rules3["RawMaterial_info.$index.exportedPercent"] = 'required|numeric'; // Adjust the rule as needed

                // Optionally, define custom error messages
                $messages3["RawMaterial_info.$index.RMaterialName.required"] = "Raw material name for entry $index is required.";
                $messages3["RawMaterial_info.$index.unit.required"] = "Unit for entry $index is required.";
                $messages3["RawMaterial_info.$index.quantity.required"] = "Quantity for entry $index is required.";
                $messages3["RawMaterial_info.$index.quantity.numeric"] = "Quantity for entry $index must be a number.";
                // ... Similar messages for other fields ...
            }

            // Validate the raw material data
            $validator4 = Validator::make($request->all(), $rules, $messages);

            if ($validator4->fails()) {
                // Validation failed, return error messages
                return response()->json(['errors' => $validator4->errors()], 422);
            }
            // If validation succeeds, continue with your logic...


       
        $companyNameData = [
                'name1'=>$formData1['companyName1'],
                'name2'=>$formData1['companyName2'],
                'name3'=>$formData1['companyName3'],
            ];
            $investmentData = [
                'investment_type_id'=>$formData1['businessForm'],
                'trade_name'=>$formData1['tradeName'],
                'business_type_id'=>$formData1['fieldOfBusiness'],
                'manager_id'=>$formData1['generalManager'],
                'created_by'=>$userId,
                'attorney_id'=>$formData1['Authorized_PersonId'],
                'type_of_ownership'=>$formData1['typeOfOwnership']

               
            ];
            $result = CompanyName::saveInvestmentWithCompanyNames($investmentData,$companyNameData);
            
            // Investment Location Registration
            DB::beginTransaction();
        try {
            $investment_address = new InvestmentAddress();
            $investment_address->investment_id = $result;
            $investment_address->woreda_id = $formData1['businessWoreda'];
            $investment_address->house_no = $formData1['houseNumber'];
            $investment_address->p_o_box = $formData1['poBox'];
            $investment_address->telephone = $formData1['telephone'];
            $investment_address->fax = $formData1['fax'];
            $investment_address->email = $formData1['email'];
            $investment_address->address_type = "investment_office_location";
            $investment_address->save();

            DB::commit(); // Commit the transaction

       // return response()->json(['message' => 'Address Registered Successfully']);
        } catch (ValidationException $e) {
            // Validation failed
            return response()->json(['error' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Something went wrong
            DB::rollback(); // Rollback the transaction
            return response()->json(['error' => 'Failed to save item'], 500);
        }        
        // Representative Registration

        DB::beginTransaction();
        try {
            $company_Representative = new Company_representative();
            $company_Representative->investment_id = $result;
            $company_Representative->representative_id = $formData1['Authorized_PersonId'];
            $company_Representative->telephone1 = $formData1['telephone_1'];
            $company_Representative->telephone2 = $formData1['telephone_2'];
            $company_Representative->email = $formData1['authorized_email'];
            $company_Representative->save();

            DB::commit(); // Commit the transaction

        //return response()->json(['message' => 'Representative Registered Successfully']);
        } catch (ValidationException $e) {
            // Validation failed
            return response()->json(['error' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Something went wrong
            DB::rollback(); // Rollback the transaction
            return response()->json(['error' => 'Failed to save item'], 500);
        }

         // Investment Activity Registration
      
        try {
            foreach ($formData2 as $activity) {
                $InvestmentActivity = new InvestmentActivities();
                $InvestmentActivity->investment_id = $result;
                $InvestmentActivity->description = $activity['value'];
                $InvestmentActivity->is_major = $activity['type'];
                $InvestmentActivity->save();
            }

            //return response()->json(['message' => 'Investment activities saved successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to save investment activities'], 500);
        }
        // Impact and Mitigation
        DB::beginTransaction();
        try {
            $Impact_and_Mitigation = new ImpactMitigation();
            $Impact_and_Mitigation->investment_id = $result;
            $Impact_and_Mitigation->impact = $formData1['potentialImpact'];
            $Impact_and_Mitigation->mitigation = $formData1['mitigationPlan'];
            $Impact_and_Mitigation->save();

            DB::commit(); // Commit the transaction

        //return response()->json(['message' => 'Impact and Mitigation Registered Successfully']);
        } catch (ValidationException $e) {
            // Validation failed
            return response()->json(['error' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Something went wrong
            DB::rollback(); // Rollback the transaction
            return response()->json(['error' => 'Failed to save item'], 500);
        }

        // Save Investment Documents
         
        // Generate a unique file name
        $fileData = base64_decode($attached_file);
            
        // Generate a unique file name
        $fileName = uniqid() . '.pdf'; // Change the extension based on your file type
        
        // Save the file to the storage/app/public directory
        Storage::disk('public')->put($fileName, $fileData);
        $fileUrl = Storage::disk('public')->url($fileName);
        DB::beginTransaction();
        try {
            $Investment_document = new InvestmentDocument();
            $Investment_document->investment_id = $result;
            $Investment_document->document_path = $fileUrl;
            $Investment_document->save();
            DB::commit(); // Commit the transaction

        //return response()->json(['message' => 'Investment Document Registered Successfully']);
        } catch (ValidationException $e) {
            // Validation failed
            return response()->json(['error' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Something went wrong
            DB::rollback(); // Rollback the transaction
            return response()->json(['error' => 'Failed to save item'], 500);
        }

        // Ivestment Location Registration

        DB::beginTransaction();
        try {
            $investment_address = new InvestmentAddress();
            $investment_address->investment_id = $result;
            $investment_address->woreda_id = $formData1['investmentWoreda'];
            $investment_address->house_no = $formData1['investmentHouseNumber'];
            $investment_address->p_o_box = $formData1['investmentPoBox'];
            $investment_address->telephone = $formData1['investmentTelephone'];
            $investment_address->fax = $formData1['investmentFax'];
            $investment_address->email = $formData1['investmentemail'];
            $investment_address->address_type = "investment_project_location";
            $investment_address->save();

            DB::commit(); // Commit the transaction

        //return response()->json(['message' => 'Investment Address Registered Successfully']);
        } catch (ValidationException $e) {
            // Validation failed
            return response()->json(['error' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Something went wrong
            DB::rollback(); // Rollback the transaction
            return response()->json(['error' => 'Failed to save item'], 500);
        }   
        
        //Investment Detail Registration
        DB::beginTransaction();
        try {
            $investment_detail = new InvestmentDetail();
            $investment_detail->investment_id  = $result;
            $investment_detail->field_of_business = $formData1['fieldOfBusiness'];
            $investment_detail->objective = $formData1['projectObjective'];
            $investment_detail->capital_in_usd = $formData1['usaDollar'];
            $investment_detail->capital_in_etb = $formData1['ethiopianBirr'];
            $investment_detail->finance_source_equity = $formData1['equity'];
            $investment_detail->finance_source_loan = $formData1['loan'];
            $investment_detail->estimated_employee = "permanentEmployee";
            $investment_detail->info_source = $formData1['source_info'];
            $investment_detail->save();

            DB::commit(); // Commit the transaction

        //return response()->json(['message' => 'Investment Detail Registered Successfully']);
        } catch (ValidationException $e) {
            // Validation failed
            return response()->json(['error' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Something went wrong
            DB::rollback(); // Rollback the transaction
            return response()->json(['error' => 'Failed to save item'], 500);
        }    
            
            // Investment Production or Service
            DB::beginTransaction();
            try {
                foreach ($formData3 as $productData) {
                    $anual_production = new AnnualProduction();
                    $anual_production->investment_id = $result;
                    $anual_production->item_id = $productData['PName'];
                    $anual_production->measurement_id = $productData['unit'];
                    $anual_production->quantity = $productData['quantity'];
                    $anual_production->local_share = $productData['localMarketShare'];
                    $anual_production->export_share = $productData['exportMarketShare'];
                    $anual_production->save();
                }
                DB::commit(); // Commit the transaction

            //return response()->json(['message' => 'Investment Production or Service saved successfully']);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Failed to save investment activities'], 500);
            }
             // Raw Material Registration
             DB::beginTransaction();
             try {
                 foreach ($formData4 as $RawMaterials) {
                     $raw_material = new RawMaterial();
                     $raw_material->investment_id = $result;
                     $raw_material->material_id = $RawMaterials['RMaterialName'];
                     $raw_material->measurement_id = $RawMaterials['unit'];
                     $raw_material->quantity = $RawMaterials['quantity'];
                     $raw_material->local_share = $RawMaterials['localPercent'];
                     $raw_material->export_share = $RawMaterials['exportedPercent'];
                     $raw_material->save();
                 }
                 DB::commit(); // Commit the transaction
 
             return response()->json(['message' => 'Raw Material Registered Successfully']);
             } catch (\Exception $e) {
                 return response()->json(['error' => 'Failed to save investment activities'], 500);
             }
 

        return response()->json(['message' =>  "Registered Successfully"]); 
    
}
}