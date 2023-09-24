<?php
namespace App\Library;
use App\Models\Actor\SideBarMenu;
class menu
{
    function get_menus()
    {
       return SideBarMenu::get();
    }
}
