<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_0aa8f61c57c3e4172a205a148c8eae503a570360e8847c714c9f6907b709f0f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba63572f99709a044a61ded17835351258d44eb455331c09c1b0a028cafaa9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba63572f99709a044a61ded17835351258d44eb455331c09c1b0a028cafaa9dd->enter($__internal_ba63572f99709a044a61ded17835351258d44eb455331c09c1b0a028cafaa9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba63572f99709a044a61ded17835351258d44eb455331c09c1b0a028cafaa9dd->leave($__internal_ba63572f99709a044a61ded17835351258d44eb455331c09c1b0a028cafaa9dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3f48058bcb49e1c0e01e7a142aefbe742fa90aac0f287defc813ec497df65f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f48058bcb49e1c0e01e7a142aefbe742fa90aac0f287defc813ec497df65f0->enter($__internal_e3f48058bcb49e1c0e01e7a142aefbe742fa90aac0f287defc813ec497df65f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e3f48058bcb49e1c0e01e7a142aefbe742fa90aac0f287defc813ec497df65f0->leave($__internal_e3f48058bcb49e1c0e01e7a142aefbe742fa90aac0f287defc813ec497df65f0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/anna/Workspace/Projekt_koncowy/GamePrincess/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
