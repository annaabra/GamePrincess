<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_40c2f13258d1add855fcd69a7bffe6fdfe3203c74d54d2f9ddae0f82a8621111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7a4e2650209a6f844441b80882c7ab7c4031dd5e6f30e2577c9d52e0152ab465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4e2650209a6f844441b80882c7ab7c4031dd5e6f30e2577c9d52e0152ab465->enter($__internal_7a4e2650209a6f844441b80882c7ab7c4031dd5e6f30e2577c9d52e0152ab465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a4e2650209a6f844441b80882c7ab7c4031dd5e6f30e2577c9d52e0152ab465->leave($__internal_7a4e2650209a6f844441b80882c7ab7c4031dd5e6f30e2577c9d52e0152ab465_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ccb8677ac05a1e1c312cfeb907ab3d3cb2fbcd51b58270088307fcd53663713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ccb8677ac05a1e1c312cfeb907ab3d3cb2fbcd51b58270088307fcd53663713->enter($__internal_5ccb8677ac05a1e1c312cfeb907ab3d3cb2fbcd51b58270088307fcd53663713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5ccb8677ac05a1e1c312cfeb907ab3d3cb2fbcd51b58270088307fcd53663713->leave($__internal_5ccb8677ac05a1e1c312cfeb907ab3d3cb2fbcd51b58270088307fcd53663713_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_52e3edf0793f67a088252b19e30d333ebe73cacc9de95fbab076016ca27d6465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e3edf0793f67a088252b19e30d333ebe73cacc9de95fbab076016ca27d6465->enter($__internal_52e3edf0793f67a088252b19e30d333ebe73cacc9de95fbab076016ca27d6465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_52e3edf0793f67a088252b19e30d333ebe73cacc9de95fbab076016ca27d6465->leave($__internal_52e3edf0793f67a088252b19e30d333ebe73cacc9de95fbab076016ca27d6465_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27683d13533816f370bd81c7ece7a952ecc29e2f5fc0b4555c4e7ddd77a3e134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27683d13533816f370bd81c7ece7a952ecc29e2f5fc0b4555c4e7ddd77a3e134->enter($__internal_27683d13533816f370bd81c7ece7a952ecc29e2f5fc0b4555c4e7ddd77a3e134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_27683d13533816f370bd81c7ece7a952ecc29e2f5fc0b4555c4e7ddd77a3e134->leave($__internal_27683d13533816f370bd81c7ece7a952ecc29e2f5fc0b4555c4e7ddd77a3e134_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/anna/Workspace/Projekt_koncowy/GamePrincess2/GamePrincess/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
