<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fa8f6f1b4357cdeedc4ef17954a0fabc936842cdb2119715d238c0a85ab84380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26022de1378886a18dce69beda6ddf6b3d1b846eddc5ecdd6d4e8e444655699b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26022de1378886a18dce69beda6ddf6b3d1b846eddc5ecdd6d4e8e444655699b->enter($__internal_26022de1378886a18dce69beda6ddf6b3d1b846eddc5ecdd6d4e8e444655699b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26022de1378886a18dce69beda6ddf6b3d1b846eddc5ecdd6d4e8e444655699b->leave($__internal_26022de1378886a18dce69beda6ddf6b3d1b846eddc5ecdd6d4e8e444655699b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8bfe5ebd91d1b5fcc8b45027d0efb7abfa0704e47d414f51baa28bdba92b66be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfe5ebd91d1b5fcc8b45027d0efb7abfa0704e47d414f51baa28bdba92b66be->enter($__internal_8bfe5ebd91d1b5fcc8b45027d0efb7abfa0704e47d414f51baa28bdba92b66be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8bfe5ebd91d1b5fcc8b45027d0efb7abfa0704e47d414f51baa28bdba92b66be->leave($__internal_8bfe5ebd91d1b5fcc8b45027d0efb7abfa0704e47d414f51baa28bdba92b66be_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c5c1cf05b33baafb1ab3bfbf503e982d889dfd9c7ce0966c691cc182bf0e71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5c1cf05b33baafb1ab3bfbf503e982d889dfd9c7ce0966c691cc182bf0e71e->enter($__internal_9c5c1cf05b33baafb1ab3bfbf503e982d889dfd9c7ce0966c691cc182bf0e71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c5c1cf05b33baafb1ab3bfbf503e982d889dfd9c7ce0966c691cc182bf0e71e->leave($__internal_9c5c1cf05b33baafb1ab3bfbf503e982d889dfd9c7ce0966c691cc182bf0e71e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a54eb204200e7e14f668e3cc5e5b2cd595059753adc0f3224c154ff9ebea21b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a54eb204200e7e14f668e3cc5e5b2cd595059753adc0f3224c154ff9ebea21b->enter($__internal_8a54eb204200e7e14f668e3cc5e5b2cd595059753adc0f3224c154ff9ebea21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8a54eb204200e7e14f668e3cc5e5b2cd595059753adc0f3224c154ff9ebea21b->leave($__internal_8a54eb204200e7e14f668e3cc5e5b2cd595059753adc0f3224c154ff9ebea21b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/anna/Workspace/Projekt_koncowy/GamePrincess/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
