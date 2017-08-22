<?php

/* GameBundle:Game:go_to.html.twig */
class __TwigTemplate_48b8cf17d34f0c6cbced31b0fb37ef2a64b27413f64a2137eac55408dbb5c28c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a42bdfc4251492b228314afc8c0101d4420c6e0f54d4430caf52c04d458fe97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42bdfc4251492b228314afc8c0101d4420c6e0f54d4430caf52c04d458fe97f->enter($__internal_a42bdfc4251492b228314afc8c0101d4420c6e0f54d4430caf52c04d458fe97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GameBundle:Game:go_to.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"pl\">
<head>
\t<meta charset=\"utf-8\" />
\t<title>Princess Game</title>
<style>
\t#container
\t{
\t    width: 1000px;
\t    margin-left: auto;
\t    margin-right: auto;
\t}
\t#logo
\t{
\t    background-color: black;
\t    color: white;
\t    text-align: center;
\t    padding: 15px;
\t}
\t#nav
\t{
\t    float: left;
\t    background-color: lightgray;
\t    width: 120px;
\t    min-height: 620px;
\t    padding: 10px;
\t}
\t#content
\t{
\t    float: left;
\t    padding: 19px;
\t    /*border-style: solid;
\tborder-width: 1px;*/
\t    width: 640px;
\t}
\t#ad
\t{
\t    float: left;
\t    width: 160px;
\t    min-height: 620px;
\t    padding: 10px;
\t    background-color: lightgray;
\t}
\t#footer
\t{
\t    clear: both;
\t    background-color: black;
\t    color: white;
\t    text-align: center;
\t    padding: 20px;
\t}
\t#descripton {
\t    margin-top: 20px;
\t    width: 400px;
\t    background-color: #DDDD00;
\t    min-height: 378px;
\t    /*border-style: solid;
\t    border-width: 1px;*/
\t    margin: auto;
\t\tpadding: 20px;

\t}
\t.button{
\twidth: 200px;
\tborder-style: solid;
\tborder-width: 1px;
\tmargin-top: 20px;
\ttext-align: center;
\tcolor: black;
\tpadding: 20px;
\tmargin: 30px auto 0px auto;
\tbackground-color: lightgray;
\tdisplay: block;
\tcursor:pointer;
\t}
a{
\ttext-decoration: none;
\tcolor: black;
}
</style>
</head>

<body>
";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "</body>
</html>
";
        
        $__internal_a42bdfc4251492b228314afc8c0101d4420c6e0f54d4430caf52c04d458fe97f->leave($__internal_a42bdfc4251492b228314afc8c0101d4420c6e0f54d4430caf52c04d458fe97f_prof);

    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        $__internal_90ea7f5f22c44cd066d71d36b843635a03e14013d801846bdbe113c348bc38a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ea7f5f22c44cd066d71d36b843635a03e14013d801846bdbe113c348bc38a3->enter($__internal_90ea7f5f22c44cd066d71d36b843635a03e14013d801846bdbe113c348bc38a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 85
        echo "\t<div id=\"container\">

\t\t<div id=\"logo\">
\t\t\t<h1>";
        // line 88
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
\t\t</div>

\t\t<div id=\"nav\">

\t\t</div>

\t\t<div id=\"content\">
\t\t\t<div id=\"descripton\">
                ";
        // line 97
        echo twig_escape_filter($this->env, ($context["description"] ?? $this->getContext($context, "description")), "html", null, true);
        echo "
\t\t\t</div>
";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? $this->getContext($context, "links")));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 100
            echo "\t\t\t<div class=\"button\">
\t\t\t\t<a href=";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "locationId", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", array()), "html", null, true);
            echo "</a>
\t\t\t</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
\t\t</div>

\t\t<div id=\"ad\">

\t\t</div>


\t\t<div id=\"footer\">

\t\t</div>

\t</div>
";
        
        $__internal_90ea7f5f22c44cd066d71d36b843635a03e14013d801846bdbe113c348bc38a3->leave($__internal_90ea7f5f22c44cd066d71d36b843635a03e14013d801846bdbe113c348bc38a3_prof);

    }

    public function getTemplateName()
    {
        return "GameBundle:Game:go_to.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  166 => 105,  154 => 101,  151 => 100,  147 => 99,  142 => 97,  130 => 88,  125 => 85,  119 => 84,  110 => 119,  108 => 84,  23 => 1,);
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
\t    width: 1000px;
\t    margin-left: auto;
\t    margin-right: auto;
\t}
\t#logo
\t{
\t    background-color: black;
\t    color: white;
\t    text-align: center;
\t    padding: 15px;
\t}
\t#nav
\t{
\t    float: left;
\t    background-color: lightgray;
\t    width: 120px;
\t    min-height: 620px;
\t    padding: 10px;
\t}
\t#content
\t{
\t    float: left;
\t    padding: 19px;
\t    /*border-style: solid;
\tborder-width: 1px;*/
\t    width: 640px;
\t}
\t#ad
\t{
\t    float: left;
\t    width: 160px;
\t    min-height: 620px;
\t    padding: 10px;
\t    background-color: lightgray;
\t}
\t#footer
\t{
\t    clear: both;
\t    background-color: black;
\t    color: white;
\t    text-align: center;
\t    padding: 20px;
\t}
\t#descripton {
\t    margin-top: 20px;
\t    width: 400px;
\t    background-color: #DDDD00;
\t    min-height: 378px;
\t    /*border-style: solid;
\t    border-width: 1px;*/
\t    margin: auto;
\t\tpadding: 20px;

\t}
\t.button{
\twidth: 200px;
\tborder-style: solid;
\tborder-width: 1px;
\tmargin-top: 20px;
\ttext-align: center;
\tcolor: black;
\tpadding: 20px;
\tmargin: 30px auto 0px auto;
\tbackground-color: lightgray;
\tdisplay: block;
\tcursor:pointer;
\t}
a{
\ttext-decoration: none;
\tcolor: black;
}
</style>
</head>

<body>
{% block body %}
\t<div id=\"container\">

\t\t<div id=\"logo\">
\t\t\t<h1>{{title}}</h1>
\t\t</div>

\t\t<div id=\"nav\">

\t\t</div>

\t\t<div id=\"content\">
\t\t\t<div id=\"descripton\">
                {{description}}
\t\t\t</div>
{% for link in links %}
\t\t\t<div class=\"button\">
\t\t\t\t<a href={{ link.locationId }}>{{ link.name }}</a>
\t\t\t</div>

{% endfor %}

\t\t</div>

\t\t<div id=\"ad\">

\t\t</div>


\t\t<div id=\"footer\">

\t\t</div>

\t</div>
{% endblock %}
</body>
</html>
", "GameBundle:Game:go_to.html.twig", "/home/anna/Workspace/Projekt_koncowy/GamePrincess2/GamePrincess/src/GameBundle/Resources/views/Game/go_to.html.twig");
    }
}
