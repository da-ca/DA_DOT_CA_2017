<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_6a1f11bbe65352e9970c2d4bfe19f56c503d05bf3caf6b482e7abbd8f08b0684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cea87037633743887927d4a35cbb821b12f4cfeb66461c98ef684429633051ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea87037633743887927d4a35cbb821b12f4cfeb66461c98ef684429633051ee->enter($__internal_cea87037633743887927d4a35cbb821b12f4cfeb66461c98ef684429633051ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_23d04c4ed902598e670b3b04d485cae56dbf44add6bd5b2cc34111eb10179c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d04c4ed902598e670b3b04d485cae56dbf44add6bd5b2cc34111eb10179c2c->enter($__internal_23d04c4ed902598e670b3b04d485cae56dbf44add6bd5b2cc34111eb10179c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cea87037633743887927d4a35cbb821b12f4cfeb66461c98ef684429633051ee->leave($__internal_cea87037633743887927d4a35cbb821b12f4cfeb66461c98ef684429633051ee_prof);

        
        $__internal_23d04c4ed902598e670b3b04d485cae56dbf44add6bd5b2cc34111eb10179c2c->leave($__internal_23d04c4ed902598e670b3b04d485cae56dbf44add6bd5b2cc34111eb10179c2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6357e8ab7e54f72afdcb2b4f0e883bb6a64448291e7e187e890d020d8edda2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6357e8ab7e54f72afdcb2b4f0e883bb6a64448291e7e187e890d020d8edda2bc->enter($__internal_6357e8ab7e54f72afdcb2b4f0e883bb6a64448291e7e187e890d020d8edda2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30512b90b9317741ee7576f3faa13de44342a824fefd5c55162a18433048b057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30512b90b9317741ee7576f3faa13de44342a824fefd5c55162a18433048b057->enter($__internal_30512b90b9317741ee7576f3faa13de44342a824fefd5c55162a18433048b057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_30512b90b9317741ee7576f3faa13de44342a824fefd5c55162a18433048b057->leave($__internal_30512b90b9317741ee7576f3faa13de44342a824fefd5c55162a18433048b057_prof);

        
        $__internal_6357e8ab7e54f72afdcb2b4f0e883bb6a64448291e7e187e890d020d8edda2bc->leave($__internal_6357e8ab7e54f72afdcb2b4f0e883bb6a64448291e7e187e890d020d8edda2bc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_635c8b350f957e00191fd7077582ebb969df3697c56192fd0015d686b1244b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635c8b350f957e00191fd7077582ebb969df3697c56192fd0015d686b1244b8c->enter($__internal_635c8b350f957e00191fd7077582ebb969df3697c56192fd0015d686b1244b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25e6c4b39e61f913f8fd08e3f5b593ea2686d08b63fb0b39ca849ba23b6abfba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e6c4b39e61f913f8fd08e3f5b593ea2686d08b63fb0b39ca849ba23b6abfba->enter($__internal_25e6c4b39e61f913f8fd08e3f5b593ea2686d08b63fb0b39ca849ba23b6abfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_25e6c4b39e61f913f8fd08e3f5b593ea2686d08b63fb0b39ca849ba23b6abfba->leave($__internal_25e6c4b39e61f913f8fd08e3f5b593ea2686d08b63fb0b39ca849ba23b6abfba_prof);

        
        $__internal_635c8b350f957e00191fd7077582ebb969df3697c56192fd0015d686b1244b8c->leave($__internal_635c8b350f957e00191fd7077582ebb969df3697c56192fd0015d686b1244b8c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
