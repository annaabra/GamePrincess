<?php

/* ::base.html.twig */
class __TwigTemplate_716f283066afcc55dadcc0df0b4d911a2ee786aa821823f66d13e371acfc6c51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50c35f33e9aab9c678eca4fd9a401004542252d25ba3d26a165ff2dc4f780d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c35f33e9aab9c678eca4fd9a401004542252d25ba3d26a165ff2dc4f780d9e->enter($__internal_50c35f33e9aab9c678eca4fd9a401004542252d25ba3d26a165ff2dc4f780d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_50c35f33e9aab9c678eca4fd9a401004542252d25ba3d26a165ff2dc4f780d9e->leave($__internal_50c35f33e9aab9c678eca4fd9a401004542252d25ba3d26a165ff2dc4f780d9e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_609f1ba843a9ede219010dd3dca9e54652af31e58680dabd95576dbdf545a153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609f1ba843a9ede219010dd3dca9e54652af31e58680dabd95576dbdf545a153->enter($__internal_609f1ba843a9ede219010dd3dca9e54652af31e58680dabd95576dbdf545a153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_609f1ba843a9ede219010dd3dca9e54652af31e58680dabd95576dbdf545a153->leave($__internal_609f1ba843a9ede219010dd3dca9e54652af31e58680dabd95576dbdf545a153_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_120de3bc6a4f23b00ef6ba5b69be18fc930e49c60fc3e983c730ba7fe367e295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120de3bc6a4f23b00ef6ba5b69be18fc930e49c60fc3e983c730ba7fe367e295->enter($__internal_120de3bc6a4f23b00ef6ba5b69be18fc930e49c60fc3e983c730ba7fe367e295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_120de3bc6a4f23b00ef6ba5b69be18fc930e49c60fc3e983c730ba7fe367e295->leave($__internal_120de3bc6a4f23b00ef6ba5b69be18fc930e49c60fc3e983c730ba7fe367e295_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_98c2f6b014d8841d6c352668a70eaf9d11a6361e21f1b1e084280e0e8a39c05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c2f6b014d8841d6c352668a70eaf9d11a6361e21f1b1e084280e0e8a39c05b->enter($__internal_98c2f6b014d8841d6c352668a70eaf9d11a6361e21f1b1e084280e0e8a39c05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_98c2f6b014d8841d6c352668a70eaf9d11a6361e21f1b1e084280e0e8a39c05b->leave($__internal_98c2f6b014d8841d6c352668a70eaf9d11a6361e21f1b1e084280e0e8a39c05b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28c2d18c883b60d3ef55382fe1bd6cfb205c23567cdb184a65dc4766df7eb0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c2d18c883b60d3ef55382fe1bd6cfb205c23567cdb184a65dc4766df7eb0df->enter($__internal_28c2d18c883b60d3ef55382fe1bd6cfb205c23567cdb184a65dc4766df7eb0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_28c2d18c883b60d3ef55382fe1bd6cfb205c23567cdb184a65dc4766df7eb0df->leave($__internal_28c2d18c883b60d3ef55382fe1bd6cfb205c23567cdb184a65dc4766df7eb0df_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/anna/Workspace/Projekt_koncowy/GamePrincess/app/Resources/views/base.html.twig");
    }
}
