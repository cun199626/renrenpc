define("user:page/account/findPwd/stepOne",["require","exports","module","common:widget/oui/lib/jquery/1.9.1/jquery","common:widget/oui/widgets/widgets"],function(e){var i=e("common:widget/oui/lib/jquery/1.9.1/jquery");i(function(){var o=e("common:widget/oui/widgets/widgets"),n=o.Form;n.randImage(".randImage"),i("#refreshCode").click(function(){i("#randImage").trigger("click")}),n.validate({target:"#notLoginFindPswForm"})})});