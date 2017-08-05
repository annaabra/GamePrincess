<?php

/* GameBundle:Default:index.html.twig */
class __TwigTemplate_af17f69336185acc574cf9821f22e3e2d1657553c757d24e979e02cb1e6fb4e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a03d532c41dcff97cb0c20e56c35adb1a6325140a9d3693cb521912e05136ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03d532c41dcff97cb0c20e56c35adb1a6325140a9d3693cb521912e05136ec2->enter($__internal_a03d532c41dcff97cb0c20e56c35adb1a6325140a9d3693cb521912e05136ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GameBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"pl\">
<head>
\t<meta charset=\"utf-8\" />
\t<title>Princess Game</title>

<style>
\t#container
\t{
\t\twidth: 1000px;
\t\tmargin-left: auto;
\t\tmargin-right: auto;
\t}
\t#logo
\t{
\t\tbackground-color: black;
\t\tcolor: white;
\t\ttext-align: center;
\t\tpadding: 15px;
\t}
\t#nav
\t{
\t\tfloat: left;
\t\tbackground-color: lightgray;
\t\twidth: 120px;
\t\tmin-height: 620px;
\t\tpadding: 10px;
\t}
\t#content
\t{
\t\tfloat: left;
\t\tpadding: 19px;
\t\tborder-style: solid;
    border-width: 1px;
\t\twidth: 640px;
\t}
\t#ad
\t{
\t\tfloat: left;
\t\twidth: 160px;
\t\tmin-height: 620px;
\t\tpadding: 10px;
\t\tbackground-color: lightgray;
\t}
\t#footer
\t{
\t\tclear: both;
\t\tbackground-color: black;
\t\tcolor: white;
\t\ttext-align: center;
\t\tpadding: 20px;
\t}
\t#descripton {
\t\tmargin-top: 20px;
\t\twidth: 400px;
\t\tbackground-color: yellow;
\t\tmin-height: 400px;
\t\tborder-style: solid;
    border-width: 1px;
\t\tmargin: auto;
\t}
\t.button{
\twidth: 200px;
\tborder-style: solid;
\tborder-width: 1px;
\tmargin-top: 20px;
\ttext-align: center;
\tpadding: 20px;
\tmargin: 30px auto 0px auto;

\t}
\t</style>

</head>

<body>

\t<div id=\"container\">

\t\t<div id=\"logo\">
\t\t\t<h1>Princess GAME</h1>
\t\t</div>

\t\t<div id=\"nav\">

\t\t</div>

\t\t<div id=\"content\">
\t\t\t<div id=\"descripton\">
\t\t\t\t";
        // line 90
        $this->displayBlock('title', $context, $blocks);
        // line 91
        echo "\t\t\t</div>
\t\t\t<div class=\"button\">
\t\t\t\tLokalizacja 1
\t\t\t</div>
\t\t\t<div class=\"button\">
\t\t\t\tLokalizacja 2
\t\t\t</div>
\t\t</div>

\t\t<div id=\"ad\">
\t\t\t<img src=\"reklama.jpg\" />
\t\t</div>


\t\t<div id=\"footer\">

\t\t</div>

\t</div>

</body>
</html>
";
        
        $__internal_a03d532c41dcff97cb0c20e56c35adb1a6325140a9d3693cb521912e05136ec2->leave($__internal_a03d532c41dcff97cb0c20e56c35adb1a6325140a9d3693cb521912e05136ec2_prof);

    }

    // line 90
    public function block_title($context, array $blocks = array())
    {
        $__internal_f012dc86e5bb09a1b86f084eb184dbae28be63e87b9aad95d06eb91bfa1ecc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f012dc86e5bb09a1b86f084eb184dbae28be63e87b9aad95d06eb91bfa1ecc3e->enter($__internal_f012dc86e5bb09a1b86f084eb184dbae28be63e87b9aad95d06eb91bfa1ecc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GameBundle:Game:goTo";
        
        $__internal_f012dc86e5bb09a1b86f084eb184dbae28be63e87b9aad95d06eb91bfa1ecc3e->leave($__internal_f012dc86e5bb09a1b86f084eb184dbae28be63e87b9aad95d06eb91bfa1ecc3e_prof);

    }

    public function getTemplateName()
    {
        return "GameBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  145 => 90,  116 => 91,  114 => 90,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html lang=\"pl\">
<head>
\t<meta charset=\"utf-8\" />
\t<title>Princess Game</title>

<style>
\t#container
\t{
\t\twidth: 1000px;
\t\tmargin-left: auto;
\t\tmargin-right: auto;
\t}
\t#logo
\t{
\t\tbackground-color: black;
\t\tcolor: white;
\t\ttext-align: center;
\t\tpadding: 15px;
\t}
\t#nav
\t{
\t\tfloat: left;
\t\tbackground-color: lightgray;
\t\twidth: 120px;
\t\tmin-height: 620px;
\t\tpadding: 10px;
\t}
\t#content
\t{
\t\tfloat: left;
\t\tpadding: 19px;
\t\tborder-style: solid;
    border-width: 1px;
\t\twidth: 640px;
\t}
\t#ad
\t{
\t\tfloat: left;
\t\twidth: 160px;
\t\tmin-height: 620px;
\t\tpadding: 10px;
\t\tbackground-color: lightgray;
\t}
\t#footer
\t{
\t\tclear: both;
\t\tbackground-color: black;
\t\tcolor: white;
\t\ttext-align: center;
\t\tpadding: 20px;
\t}
\t#descripton {
\t\tmargin-top: 20px;
\t\twidth: 400px;
\t\tbackground-color: yellow;
\t\tmin-height: 400px;
\t\tborder-style: solid;
    border-width: 1px;
\t\tmargin: auto;
\t}
\t.button{
\twidth: 200px;
\tborder-style: solid;
\tborder-width: 1px;
\tmargin-top: 20px;
\ttext-align: center;
\tpadding: 20px;
\tmargin: 30px auto 0px auto;

\t}
\t</style>

</head>

<body>

\t<div id=\"container\">

\t\t<div id=\"logo\">
\t\t\t<h1>Princess GAME</h1>
\t\t</div>

\t\t<div id=\"nav\">

\t\t</div>

\t\t<div id=\"content\">
\t\t\t<div id=\"descripton\">
\t\t\t\t{% block title %}GameBundle:Game:goTo{% endblock %}
\t\t\t</div>
\t\t\t<div class=\"button\">
\t\t\t\tLokalizacja 1
\t\t\t</div>
\t\t\t<div class=\"button\">
\t\t\t\tLokalizacja 2
\t\t\t</div>
\t\t</div>

\t\t<div id=\"ad\">
\t\t\t<img src=\"reklama.jpg\" />
\t\t</div>


\t\t<div id=\"footer\">

\t\t</div>

\t</div>

</body>
</html>
", "GameBundle:Default:index.html.twig", "/home/anna/Workspace/Projekt_koncowy/GamePrincess2/GamePrincess/src/GameBundle/Resources/views/Default/index.html.twig");
    }
}
