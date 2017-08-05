<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8e5f2b839ea1448deda655637390339d65165dc4e03448030cb9c7aea8df684d extends Twig_Template
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
        $__internal_ebfaf1ccf883b19cf27298b73750141d76ffeb33fa39019f2f4670a7fd30b4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebfaf1ccf883b19cf27298b73750141d76ffeb33fa39019f2f4670a7fd30b4f6->enter($__internal_ebfaf1ccf883b19cf27298b73750141d76ffeb33fa39019f2f4670a7fd30b4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebfaf1ccf883b19cf27298b73750141d76ffeb33fa39019f2f4670a7fd30b4f6->leave($__internal_ebfaf1ccf883b19cf27298b73750141d76ffeb33fa39019f2f4670a7fd30b4f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a72f5becb37a1e7fad2088d40b7ea7efafbf8d28dbdaba2666e27a2bde4e53a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72f5becb37a1e7fad2088d40b7ea7efafbf8d28dbdaba2666e27a2bde4e53a2->enter($__internal_a72f5becb37a1e7fad2088d40b7ea7efafbf8d28dbdaba2666e27a2bde4e53a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a72f5becb37a1e7fad2088d40b7ea7efafbf8d28dbdaba2666e27a2bde4e53a2->leave($__internal_a72f5becb37a1e7fad2088d40b7ea7efafbf8d28dbdaba2666e27a2bde4e53a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aeca58a0a3cdeb7b032ae7f9a64260fa7931c19951ec40771eef6caa30e489f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeca58a0a3cdeb7b032ae7f9a64260fa7931c19951ec40771eef6caa30e489f2->enter($__internal_aeca58a0a3cdeb7b032ae7f9a64260fa7931c19951ec40771eef6caa30e489f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aeca58a0a3cdeb7b032ae7f9a64260fa7931c19951ec40771eef6caa30e489f2->leave($__internal_aeca58a0a3cdeb7b032ae7f9a64260fa7931c19951ec40771eef6caa30e489f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b02143fb91c7b7d6b8e0bed1a89bd40c7b4a09d92deae275ac0e464f457f03ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02143fb91c7b7d6b8e0bed1a89bd40c7b4a09d92deae275ac0e464f457f03ed->enter($__internal_b02143fb91c7b7d6b8e0bed1a89bd40c7b4a09d92deae275ac0e464f457f03ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b02143fb91c7b7d6b8e0bed1a89bd40c7b4a09d92deae275ac0e464f457f03ed->leave($__internal_b02143fb91c7b7d6b8e0bed1a89bd40c7b4a09d92deae275ac0e464f457f03ed_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/anna/Workspace/Projekt_koncowy/GamePrincess2/GamePrincess/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
