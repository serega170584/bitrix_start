<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<table class="empty">
  <tr>
    <td>
    <div class="vcard">
    	<div><span class="category">Организация</span> <span class="fn org">Serjstudio</span></div>
        <div><b>Телефон:</b> <span class="tel">+7 (962) 981-51-63</span></div>
        <div class="adr"><b>Адрес:</b> 141707, <span class="locality">г. Долгопрудный Московской области</span>, <span class="street-address">ул. Корабельная, д. 1</span></div>
        <div><b>E-mail:</b> <a href="mailto:serega170584@gmail.com">serega170584@gmail.com</a></div>
        <div>Мы работаем <span class="workhours">ежедневно с 9:00 до 18:00</span></div>
    </div>
    </td>
    <td align="right">
    
    <? $APPLICATION->IncludeComponent(
        "bitrix:map.yandex.view",
        "",
        Array(
            "INIT_MAP_TYPE" => "MAP",
            "MAP_DATA" => "a:3:{s:10:\"yandex_lat\";s:7:\"55.9603\";s:10:\"yandex_lon\";s:7:\"37.5053\";s:12:\"yandex_scale\";i:10;}",
            "MAP_WIDTH" => "600",
            "MAP_HEIGHT" => "300",
            "CONTROLS" => array("ZOOM", "MINIMAP", "TYPECONTROL", "SCALELINE"),
            "OPTIONS" => array("ENABLE_SCROLL_ZOOM", "ENABLE_DBLCLICK_ZOOM", "ENABLE_DRAGGING"),
            "MAP_ID" => ""
        )
    );?>
    
    </td>
  </tr>
</table>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>