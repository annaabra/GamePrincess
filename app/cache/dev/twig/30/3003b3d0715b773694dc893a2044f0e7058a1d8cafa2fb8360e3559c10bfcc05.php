<?php

/* GameBundle:Default:index.html.twig */
class __TwigTemplate_b13e1c0701da019da4b46d4037805a8cf7a7ff9226264b4da399360d01bbe5b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02c3ea065481b7d0ec5d90ad6c7a5c3ae13119bc966e4c47868dabcb22568bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c3ea065481b7d0ec5d90ad6c7a5c3ae13119bc966e4c47868dabcb22568bce->enter($__internal_02c3ea065481b7d0ec5d90ad6c7a5c3ae13119bc966e4c47868dabcb22568bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GameBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_02c3ea065481b7d0ec5d90ad6c7a5c3ae13119bc966e4c47868dabcb22568bce->leave($__internal_02c3ea065481b7d0ec5d90ad6c7a5c3ae13119bc966e4c47868dabcb22568bce_prof);

    }

    public function getTemplateName()
    {
        return "GameBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "GameBundle:Default:index.html.twig", "/home/anna/Workspace/Projekt_koncowy/GamePrincess/src/GameBundle/Resources/views/Default/index.html.twig");
    }
}
