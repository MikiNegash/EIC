<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Actor\Permission;
use App\Models\Actor\PermissionGroup;
use App\Models\Actor\Role;
use App\Models\Actor\SideBarMenu;
use App\Models\Actor\SideBarMenuItem;
use App\Models\Actor\User;
use App\Models\Letter\LetterCode;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->PermissionSeeder();
       $this->SideBarData();
       $this->letter_codes();
    }

    public function PermissionSeeder()
    {
        $user=User::where("email","admin@gmail.com")->get()->first();
        if(!$user)
        {
            $user=User::create([
                "name"=>"Admin",
                "email"=>"admin@gmail.com",
                "password"=>"$2y$10\$D.C1lGfc1uHg9smkUdibK.ircCgbA0DiVjgiq9C1UmzCEqalNhCSu",
                "email_verified_at"=>"2023-8-10",
                "user_type"=>"user"
            ]);
        }
        $role=Role::where("name","admin")->get()->first();
        if(!$role)
        {
            $role=Role::create([
                "name"=>"Admin",
                "added_by"=>$user->id
            ]);
        }
        $role->Users()->detach($user);
        $role->Users()->attach($user,["added_by"=>$user->id]);


        $permission_data=[
                            [
                                "group_name"=>"ROLE PERMISSION MANAGEMENT",
                                "group_order_num"=>1,
                                "permissions"=>
                                    [
                                        ["name"=>"view_role","label"=>"View Role","order_num"=>1],
                                        ["name"=>"delete_role","label"=>"Delete Role","order_num"=>1],
                                        ["name"=>"create_new_role","label"=>"Creating New Role","order_num"=>2],
                                        ["name"=>"assign_role_permission","label"=>"Assign Permission To Role","order_num"=>3],
                                        ["name"=>"update_role","label"=>"Update Role Information","order_num"=>4],
                                        ["name"=>"remove_role_permission","label"=>"Remove Permission From Role","order_num"=>5],
                                    ]
                            ],
                            [
                                "group_name"=>"USER MANAGEMENT",
                                "group_order_num"=>3,
                                "permissions"=>
                                    [
                                        ["name"=>"view_users","label"=>"View User","order_num"=>1],
                                        ["name"=>"add_new_user","label"=>"Add User","order_num"=>2],
                                        ["name"=>"update_user","label"=>"Update User","order_num"=>2],
                                        ["name"=>"delete_user","label"=>"Delete User","order_num"=>2],
                                        ["name"=>"enable_disable_user","label"=>"Enable Disable User","order_num"=>2],
                                        ["name"=>"assign_user_role","label"=>"Assign User Role","order_num"=>2],
                                        ["name"=>"assign_user_permission","label"=>"Assign User Permission","order_num"=>2],
                                    ]
                            ],
                            [
                                "group_name"=>"Item Management",
                                "group_order_num"=>5,
                                "permissions"=>
                                    [
                                        ["name"=>"register_item","label"=>"Register Item","order_num"=>1],
                                        ["name"=>"item_page","label"=>"Item Management Page","order_num"=>2],
                                        ["name"=>"list_of_item","label"=>"View List of Items","order_num"=>3],
                                        ["name"=>"delete_item","label"=>"Delete Item","order_num"=>4],
                                        ["name"=>"update_item","label"=>"Update Item","order_num"=>5],

                                    ]
                           ],
                           [
                                "group_name"=>"Measurement Management",
                                "group_order_num"=>6,
                                "permissions"=>
                                    [
                                        ["name"=>"measurement_page","label"=>"Measurement Management Page","order_num"=>1],
                                        ["name"=>"measurement_registration","label"=>"Measurement Registration","order_num"=>2],
                                        ["name"=>"list_of_measurement","label"=>"View List of Measurement","order_num"=>3],
                                        ["name"=>"delete_measurement","label"=>"Measurement Deletion","order_num"=>4],
                                        ["name"=>"update_measurement","label"=>"Updating Measurement","order_num"=>5],

                                    ]
                            ],

                            [
                                "group_name"=>"Region Management",
                                "group_order_num"=>7,
                                "permissions"=>
                                    [
                                        ["name"=>"region_page","label"=>"Region Management Page","order_num"=>1],
                                        ["name"=>"region_registration","label"=>"Region Registration","order_num"=>2],
                                        ["name"=>"list_of_region","label"=>"View List of Region","order_num"=>3],
                                        ["name"=>"delete_region","label"=>"Region Deletion","order_num"=>4],
                                        ["name"=>"update_region","label"=>"Updating Region","order_num"=>5],

                                    ]
                            ],
                            [
                                "group_name"=>"Zone Management",
                                "group_order_num"=>8,
                                "permissions"=>
                                    [
                                        ["name"=>"zone_page","label"=>"Zone Management Page","order_num"=>1],
                                        ["name"=>"zone_registration","label"=>"Zone Registration","order_num"=>2],
                                        ["name"=>"list_of_zone","label"=>"View List of Zone","order_num"=>3],
                                        ["name"=>"delete_zone","label"=>"Zone Deletion","order_num"=>4],
                                        ["name"=>"update_zone","label"=>"Updating Zone","order_num"=>5],

                                    ]
                            ],
                            [
                                "group_name"=>"woreda Management",
                                "group_order_num"=>9,
                                "permissions"=>
                                    [
                                        ["name"=>"woreda_page","label"=>"Woreda Management Page","order_num"=>1],
                                        ["name"=>"woreda_registration","label"=>"Woreda Registration","order_num"=>2],
                                        ["name"=>"list_of_woreda","label"=>"View List of Woreda","order_num"=>3],
                                        ["name"=>"delete_woreda","label"=>"Woreda Deletion","order_num"=>4],
                                        ["name"=>"update_woreda","label"=>"Updating Woreda","order_num"=>5],

                                    ]
                            ],
                            [
                                "group_name"=>"Investment Type Management",
                                "group_order_num"=>10,
                                "permissions"=>
                                    [
                                        ["name"=>"investment_type_page","label"=>"Investment Type Management Page","order_num"=>1],
                                        ["name"=>"investment_type_registration","label"=>"Investment Type Registration","order_num"=>2],
                                        ["name"=>"list_of_investment_type","label"=>"View List Investment Type","order_num"=>3],
                                        ["name"=>"delete_Investment_type","label"=>"Investment Type Deletion","order_num"=>4],
                                        ["name"=>"update_investment_type","label"=>"Updating Investment Type","order_num"=>5],

                                    ]
                            ],
                            [
                                "group_name"=>"VIP service Management",
                                "group_order_num"=>11,
                                "permissions"=>
                                    [
                                        ["name"=>"VIP_services_page","label"=>"VIP Service Management Page","order_num"=>1],
                                        ["name"=>"VIP_services_registration","label"=>"Investment Type Registration","order_num"=>2],
                                        ["name"=>"list_of_VIP_services","label"=>"View List of VIP Services","order_num"=>3],
                                        ["name"=>"delete_VIP_services","label"=>"VIP Service Deletion","order_num"=>4],
                                        ["name"=>"update_VIP_services","label"=>"Updating VIP Services","order_num"=>5],
                                        ["name"=>"investor_vip_request","label"=>"Request VIP Services","order_num"=>6],

                                    ]
                            ],
                            [
                                "group_name"=>"VIP service Management",
                                "group_order_num"=>12,
                                "permissions"=>
                                    [
                                        ["name"=>"request_investment_registration","label"=>"Investment Registration Request","order_num"=>1],
                                        ["name"=>"Investment_registration_page","label"=>"Investment Registration page","order_num"=>2],
                                        ["name"=>"Investment_commission_page","label"=>"Investment Commission page","order_num"=>3],

                                    ]
                            ],
                            [
                                "group_name"=>"Letter Management",
                                "group_order_num"=>12,
                                "permissions"=>
                                    [
                                        ["name"=>"view_letter_code","label"=>"View Letter Code","order_num"=>1],
                                        ["name"=>"create_new_letter_template","label"=>"create_new_letter_template","order_num"=>1],
                                        
                                    ]
                                
                            ]

                        ];
        foreach ($permission_data as $permissions)
        {
            $permission_group=PermissionGroup::where("group_name",$permissions["group_name"])->get()->first();
            if (!$permission_group)
            {
                $permission_group=PermissionGroup::create([
                    "group_name"=>$permissions["group_name"],
                    "order_num"=>$permissions["group_order_num"]
                ]);
            }
            else
            {
                $permission_group->update(["order_num"=>$permissions["group_order_num"]]);
            }
            foreach($permissions["permissions"] as $permission)
            {
                $mypermission=Permission::where("name",$permission["name"])
                                    ->get()
                                    ->first();

                if(!$mypermission)
                {
                    $mypermission=Permission::create([
                        "name"=>$permission['name'],
                        "label"=>$permission['label'],
                        "group_id"=>$permission_group->id,
                        "order_num"=>$permission['order_num']
                    ]);
                }
                else
                {
                    $mypermission->update([
                        "order_num"=>$permission['order_num'],
                        "label"=>$permission['label'],
                        "group_id"=>$permission_group->id]);
                }
                $role->Permissions()->detach($mypermission);
                $role->Permissions()->attach($mypermission,["added_by"=>$user->id]);
            }

        }
    }

    public function SideBarData()
    {

        $data=[
                    [
                        "menu"=>[
                                    "title"=>"Role And Permission",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-01"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Role management",
                                        "link"=>"/role/view_roles",
                                        "permission_name"=>"view_role",
                                        "item_code"=>"MC-01-MI-01"
                                    ]
                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"User Management",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-02"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Users",
                                        "link"=>"/user/view_users",
                                        "permission_name"=>"view_user",
                                        "item_code"=>"MC-02-MI-01"
                                    ]
                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"Visa Management",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-03"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Other Visa",
                                        "link"=>"/other_visa/view_other_visa",
                                        "permission_name"=>"view_other_visa",
                                        "item_code"=>"MC-03-MI-01"
                                    ]
                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"Letter Management",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-04"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "View Letter Types",
                                        "link"=>"/letter/view_letter_type",
                                        "permission_name"=>"view_letter_code",
                                        "item_code"=>"MC-04-MI-01"
                                    ]
                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"Item Management",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-31"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Item Registration",
                                        "link"=>"/item/page",
                                        "permission_name"=>"register_item",
                                        "item_code"=>"MC-31-MI-01"
                                    ]

                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"Measurements Management",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-32"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Measurement Page",
                                        "link"=>"/measurement/page",
                                        "permission_name"=>"measurement_page",
                                        "item_code"=>"MC-32-MI-01"
                                    ]

                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"Address Management",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-33"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Region Management",
                                        "link"=>"/region/region_page",
                                        "permission_name"=>"region_page",
                                        "item_code"=>"MC-33-MI-01"
                                    ],
                                    [
                                        "title" => "Zone Management",
                                        "link"=>"/zone/zone_page",
                                        "permission_name"=>"zone_page",
                                        "item_code"=>"MC-33-MI-02"
                                    ],
                                    [
                                        "title" => "Woreda Management",
                                        "link"=>"/woreda/woreda_page",
                                        "permission_name"=>"woreda_page",
                                        "item_code"=>"MC-33-MI-03"
                                    ]

                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"Investment Type",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-34"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Investment Type Page",
                                        "link"=>"/investment_type/page",
                                        "permission_name"=>"investment_type_page",
                                        "item_code"=>"MC-34-MI-01"
                                    ]

                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"VIP Services",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-35"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "VIP services Page",
                                        "link"=>"/VIP_services/page",
                                        "permission_name"=>"VIP_services_page",
                                        "item_code"=>"MC-35-MI-01"
                                    ],
                                    [
                                        "title" => "Request VIP Service",
                                        "link"=>"/Investor/request_vip_service_page",
                                        "permission_name"=>"investor_vip_request",
                                        "item_code"=>"MC-35-MI-02"
                                    ]

                                ]
                    ],
                    [
                        "menu"=>[
                                    "title"=>"Investment",
                                    "user_type"=>"user",  ///user or customer
                                    "icon"=>"user",
                                    "code"=>"MC-36"
                                ],
                        "menuItems"=>
                                [
                                    [
                                        "title" => "Investment Registration Request",
                                        "link"=>"/investment/request_and_view_investment",
                                        "permission_name"=>"Investment_registration_page",
                                        "item_code"=>"MC-36-MI-01"
                                    ], 
                                     [
                                        "title" => "Investment Commission",
                                        "link"=>"/investment/icv",  
                                        "permission_name"=>"Investment_commission_page",                                 
                                        "item_code"=>"MC-36-MI-02"
                                    ]

                                ]
                    ],
                   


                ];
        foreach($data as $ele)
        {
            $side_bar_menu=SideBarMenu::where("code",$ele["menu"]["code"])->get()->first();
            if(!$side_bar_menu)
            {
                $side_bar_menu=SideBarMenu::create($ele["menu"]);
            }
            else
            {
                $side_bar_menu->update(
                    [
                        "title"=>$ele["menu"]["title"],
                        "icon"=>$ele["menu"]["icon"],
                        "user_type"=>$ele["menu"]["user_type"]
                    ]);
            }

            foreach($ele["menuItems"] as $menuItem)
            {
                $menu_item=SideBarMenuItem::where("menu_id",$side_bar_menu->id)->where("item_code",$menuItem["item_code"])->get()->first();
                if(!$menu_item)
                {
                    $permission=Permission::where("name",$menuItem["permission_name"])->get()->first();
                    $menu_item=SideBarMenuItem::create([
                        "title"=>$menuItem["title"],
                        "link"=>$menuItem["link"],
                        "menu_id"=>$side_bar_menu->id,
                        "item_code"=>$menuItem["item_code"],
                        "permission_id"=>$permission?$permission->id:NULL
                    ]);
                }
                else
                {
                    $permission=Permission::where("name",$menuItem["permission_name"])->get()->first();
                    $menu_item->update([
                        "link"=>$menuItem["link"],
                        "permission_id"=>$permission?$permission->id:NULL
                    ]);
                }
            }
        }
    }

    public function letter_codes()
    {
        $datas=[
                    [
                        "code"=>"Letter-001",
                        "description"=>"Letter written for VIP service from EIC to INVEA.",
                        "letter_type"=>"outgoing",
                        "with_whom"=>"investor"
                    ],
                    [
                        "code"=>"Letter-002",
                        "description"=>"Letter written for VIP service from Investor to EIC.",
                        "letter_type"=>"Incoming",
                        "with_whom"=>"investor"
                    ]

                ];
        foreach($datas as $letter_code)
        {
            $letter=LetterCode::where("code",$letter_code["code"])->get()->first();
            if($letter)
            {
                $letter->update($letter_code);
            }
            else
            {
                LetterCode::create($letter_code);
            }

        }
    }



}
