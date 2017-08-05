<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_af544def0f051fb480a5eab7765039f2da66d63ab993ed7853cb40c1a3f6432f extends Twig_Template
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
        $__internal_d9383be74d88eb4cf21241e22172613ba300d9c61529430dd6357445afb92007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9383be74d88eb4cf21241e22172613ba300d9c61529430dd6357445afb92007->enter($__internal_d9383be74d88eb4cf21241e22172613ba300d9c61529430dd6357445afb92007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9383be74d88eb4cf21241e22172613ba300d9c61529430dd6357445afb92007->leave($__internal_d9383be74d88eb4cf21241e22172613ba300d9c61529430dd6357445afb92007_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf2fc6ad41a23cab347a38c303a0a90f15768dc3987c6d4f19436f717203b652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2fc6ad41a23cab347a38c303a0a90f15768dc3987c6d4f19436f717203b652->enter($__internal_bf2fc6ad41a23cab347a38c303a0a90f15768dc3987c6d4f19436f717203b652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bf2fc6ad41a23cab347a38c303a0a90f15768dc3987c6d4f19436f717203b652->leave($__internal_bf2fc6ad41a23cab347a38c303a0a90f15768dc3987c6d4f19436f717203b652_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2dd3de2c7268f518aefd016361cf1f79fb1ee32f5a1615b5ea96d5876594ac07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd3de2c7268f518aefd016361cf1f79fb1ee32f5a1615b5ea96d5876594ac07->enter($__internal_2dd3de2c7268f518aefd016361cf1f79fb1ee32f5a1615b5ea96d5876594ac07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2dd3de2c7268f518aefd016361cf1f79fb1ee32f5a1615b5ea96d5876594ac07->leave($__internal_2dd3de2c7268f518aefd016361cf1f79fb1ee32f5a1615b5ea96d5876594ac07_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e415511210dec29d7c2b9411dc91bda301fe1c54504eb1453faea37b871d005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e415511210dec29d7c2b9411dc91bda301fe1c54504eb1453faea37b871d005->enter($__internal_9e415511210dec29d7c2b9411dc91bda301fe1c54504eb1453faea37b871d005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9e415511210dec29d7c2b9411dc91bda301fe1c54504eb1453faea37b871d005->leave($__internal_9e415511210dec29d7c2b9411dc91bda301fe1c54504eb1453faea37b871d005_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/anna/Workspace/Projekt_koncowy/GamePrincess2/GamePrincess/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
