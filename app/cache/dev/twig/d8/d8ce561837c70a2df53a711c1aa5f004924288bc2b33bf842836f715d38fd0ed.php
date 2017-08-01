<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5c8c95081e6f3565e4c20f4b3a72882b09ce78318bf72d3147b23180051d0ddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77615ac87d1c690e6e95a41d122444918ae0af0adbe87ba95b52d8d9b0a2f965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77615ac87d1c690e6e95a41d122444918ae0af0adbe87ba95b52d8d9b0a2f965->enter($__internal_77615ac87d1c690e6e95a41d122444918ae0af0adbe87ba95b52d8d9b0a2f965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77615ac87d1c690e6e95a41d122444918ae0af0adbe87ba95b52d8d9b0a2f965->leave($__internal_77615ac87d1c690e6e95a41d122444918ae0af0adbe87ba95b52d8d9b0a2f965_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_458ae7422e3cd895afabaa5c7c32be07808e3109f156dfebfdc91b0b71013e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458ae7422e3cd895afabaa5c7c32be07808e3109f156dfebfdc91b0b71013e38->enter($__internal_458ae7422e3cd895afabaa5c7c32be07808e3109f156dfebfdc91b0b71013e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_458ae7422e3cd895afabaa5c7c32be07808e3109f156dfebfdc91b0b71013e38->leave($__internal_458ae7422e3cd895afabaa5c7c32be07808e3109f156dfebfdc91b0b71013e38_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bbe4ef22f144c155ac74b0eb13f376aed84425032e820e0994b8e79dfa733e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bbe4ef22f144c155ac74b0eb13f376aed84425032e820e0994b8e79dfa733e8->enter($__internal_4bbe4ef22f144c155ac74b0eb13f376aed84425032e820e0994b8e79dfa733e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4bbe4ef22f144c155ac74b0eb13f376aed84425032e820e0994b8e79dfa733e8->leave($__internal_4bbe4ef22f144c155ac74b0eb13f376aed84425032e820e0994b8e79dfa733e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0586ab3d9f76855e7c62d70d2c0b93de1831d1c3dba995dba1a44e133c1820d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0586ab3d9f76855e7c62d70d2c0b93de1831d1c3dba995dba1a44e133c1820d->enter($__internal_e0586ab3d9f76855e7c62d70d2c0b93de1831d1c3dba995dba1a44e133c1820d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e0586ab3d9f76855e7c62d70d2c0b93de1831d1c3dba995dba1a44e133c1820d->leave($__internal_e0586ab3d9f76855e7c62d70d2c0b93de1831d1c3dba995dba1a44e133c1820d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/anna/Workspace/Projekt_koncowy/GamePrincess/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
