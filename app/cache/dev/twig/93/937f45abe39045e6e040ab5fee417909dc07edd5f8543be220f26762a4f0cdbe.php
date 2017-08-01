<?php

/* GameBundle:Game:go_to.html.twig */
class __TwigTemplate_6ffc1635d2e48065716c80aa778a551c7d37e642ae52742b15ccfe9602601f2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GameBundle:Game:go_to.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca586ff471a0ab2daa808815b7ffdaae7d1d75e8d7fe13437a6cc809477cf911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca586ff471a0ab2daa808815b7ffdaae7d1d75e8d7fe13437a6cc809477cf911->enter($__internal_ca586ff471a0ab2daa808815b7ffdaae7d1d75e8d7fe13437a6cc809477cf911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GameBundle:Game:go_to.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca586ff471a0ab2daa808815b7ffdaae7d1d75e8d7fe13437a6cc809477cf911->leave($__internal_ca586ff471a0ab2daa808815b7ffdaae7d1d75e8d7fe13437a6cc809477cf911_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_202296434a8f85ebdb8f257bbee539e822af68963e912aeeb86c9a7351f7478c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202296434a8f85ebdb8f257bbee539e822af68963e912aeeb86c9a7351f7478c->enter($__internal_202296434a8f85ebdb8f257bbee539e822af68963e912aeeb86c9a7351f7478c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GameBundle:Game:goTo";
        
        $__internal_202296434a8f85ebdb8f257bbee539e822af68963e912aeeb86c9a7351f7478c->leave($__internal_202296434a8f85ebdb8f257bbee539e822af68963e912aeeb86c9a7351f7478c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2d07c9a4283ea8bf2fa578f5ee751c6009bfbaeb3e676794c68619b8472d809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d07c9a4283ea8bf2fa578f5ee751c6009bfbaeb3e676794c68619b8472d809->enter($__internal_a2d07c9a4283ea8bf2fa578f5ee751c6009bfbaeb3e676794c68619b8472d809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "
    <ul>
    ";
        // line 8
        echo twig_escape_filter($this->env, ($context["description"] ?? $this->getContext($context, "description")), "html", null, true);
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? $this->getContext($context, "links")));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 10
            echo "        <li>
            <a href=";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "locationId", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", array()), "html", null, true);
            echo "</a>
        </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>

";
        
        $__internal_a2d07c9a4283ea8bf2fa578f5ee751c6009bfbaeb3e676794c68619b8472d809->leave($__internal_a2d07c9a4283ea8bf2fa578f5ee751c6009bfbaeb3e676794c68619b8472d809_prof);

    }

    public function getTemplateName()
    {
        return "GameBundle:Game:go_to.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  69 => 11,  66 => 10,  62 => 9,  58 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}GameBundle:Game:goTo{% endblock %}

{% block body %}
{{title}}
    <ul>
    {{description}}
{% for link in links %}
        <li>
            <a href={{ link.locationId }}>{{ link.name }}</a>
        </li>
{% endfor %}
    </ul>

{% endblock %}
", "GameBundle:Game:go_to.html.twig", "/home/anna/Workspace/Projekt_koncowy/GamePrincess/src/GameBundle/Resources/views/Game/go_to.html.twig");
    }
}
