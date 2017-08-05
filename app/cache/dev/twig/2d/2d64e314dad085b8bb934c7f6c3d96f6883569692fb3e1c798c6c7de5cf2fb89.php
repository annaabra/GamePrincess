<?php

/* ::base.html.twig */
class __TwigTemplate_306de350eec91665043f57f97209cf88bebf1e80a1d152a8e75637086628fd49 extends Twig_Template
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
        $__internal_1acf69f4521627355a5725b32503e415a5ec59e1f633314037572b5e635b2b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acf69f4521627355a5725b32503e415a5ec59e1f633314037572b5e635b2b7c->enter($__internal_1acf69f4521627355a5725b32503e415a5ec59e1f633314037572b5e635b2b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1acf69f4521627355a5725b32503e415a5ec59e1f633314037572b5e635b2b7c->leave($__internal_1acf69f4521627355a5725b32503e415a5ec59e1f633314037572b5e635b2b7c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5413ec21031ae1abe495790ec010918160a920de51ac09174f3bec10ef63886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5413ec21031ae1abe495790ec010918160a920de51ac09174f3bec10ef63886->enter($__internal_c5413ec21031ae1abe495790ec010918160a920de51ac09174f3bec10ef63886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Game";
        
        $__internal_c5413ec21031ae1abe495790ec010918160a920de51ac09174f3bec10ef63886->leave($__internal_c5413ec21031ae1abe495790ec010918160a920de51ac09174f3bec10ef63886_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4cd71fe29ad15c317957801dfdc2d7e87d96827b6772cf837da47520ee3ee97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cd71fe29ad15c317957801dfdc2d7e87d96827b6772cf837da47520ee3ee97->enter($__internal_c4cd71fe29ad15c317957801dfdc2d7e87d96827b6772cf837da47520ee3ee97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c4cd71fe29ad15c317957801dfdc2d7e87d96827b6772cf837da47520ee3ee97->leave($__internal_c4cd71fe29ad15c317957801dfdc2d7e87d96827b6772cf837da47520ee3ee97_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4fc44a3b3c49cc4a36107557fe8025780d9c78706dad701386b91235ee6fbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4fc44a3b3c49cc4a36107557fe8025780d9c78706dad701386b91235ee6fbf1->enter($__internal_e4fc44a3b3c49cc4a36107557fe8025780d9c78706dad701386b91235ee6fbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e4fc44a3b3c49cc4a36107557fe8025780d9c78706dad701386b91235ee6fbf1->leave($__internal_e4fc44a3b3c49cc4a36107557fe8025780d9c78706dad701386b91235ee6fbf1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bb92d8716a1a9d044884cc624d7841aef8abe9d814fcc376e158c77d1a2d502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb92d8716a1a9d044884cc624d7841aef8abe9d814fcc376e158c77d1a2d502->enter($__internal_1bb92d8716a1a9d044884cc624d7841aef8abe9d814fcc376e158c77d1a2d502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1bb92d8716a1a9d044884cc624d7841aef8abe9d814fcc376e158c77d1a2d502->leave($__internal_1bb92d8716a1a9d044884cc624d7841aef8abe9d814fcc376e158c77d1a2d502_prof);

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
        <title>{% block title %}Game{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/anna/Workspace/Projekt_koncowy/GamePrincess2/GamePrincess/app/Resources/views/base.html.twig");
    }
}
