<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (is_string($_REQUEST["backurl"]) && strpos($_REQUEST["backurl"], "/") === 0)
{
	LocalRedirect($_REQUEST["backurl"]);
}

$APPLICATION->SetTitle("Вход на сайт");
?><p>
</p>
<p>
 <a href="http://192.168.1.183/login/<?=SITE_DIR?>"><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"demo",
	Array(
		"COMPONENT_TEMPLATE" => "demo",
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "/login/user.php",
		"REGISTER_URL" => "/login/registration.php",
		"SHOW_ERRORS" => "N"
	)
);?></a>
</p>
<p>
	<a href="http://192.168.1.183/login/<?=SITE_DIR?>">Вернуться на главную страницу</a>⁠
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>