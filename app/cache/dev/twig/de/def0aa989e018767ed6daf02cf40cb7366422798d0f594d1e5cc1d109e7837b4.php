<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_8e8dd057724c108069e25439c68ab290488ab0f21fa7fae27a59cac7dd546fd9 extends Twig_Template
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
        $__internal_be9d58b90f835f313d57525b7e54dddce2f47cfe8ae0e548b55eca61d1806fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9d58b90f835f313d57525b7e54dddce2f47cfe8ae0e548b55eca61d1806fcc->enter($__internal_be9d58b90f835f313d57525b7e54dddce2f47cfe8ae0e548b55eca61d1806fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be9d58b90f835f313d57525b7e54dddce2f47cfe8ae0e548b55eca61d1806fcc->leave($__internal_be9d58b90f835f313d57525b7e54dddce2f47cfe8ae0e548b55eca61d1806fcc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_290f595b4f9031134d78f1339329aa8abf3003fa1c3e4d4b787effa778a82b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290f595b4f9031134d78f1339329aa8abf3003fa1c3e4d4b787effa778a82b2c->enter($__internal_290f595b4f9031134d78f1339329aa8abf3003fa1c3e4d4b787effa778a82b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_290f595b4f9031134d78f1339329aa8abf3003fa1c3e4d4b787effa778a82b2c->leave($__internal_290f595b4f9031134d78f1339329aa8abf3003fa1c3e4d4b787effa778a82b2c_prof);

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
", "@FOSUser/Security/login.html.twig", "/home/anna/Workspace/Projekt_koncowy/GamePrincess2/GamePrincess/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
