<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ea00bc52105a2efb1b7176b1181ac496e1b22c7c12d87d07e8fb9dc7341726fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ccd24e2a665d59104925e6d23508af40a5ca5e38283734b52bebf7697f6e83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ccd24e2a665d59104925e6d23508af40a5ca5e38283734b52bebf7697f6e83c->enter($__internal_1ccd24e2a665d59104925e6d23508af40a5ca5e38283734b52bebf7697f6e83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_cc5b35aaf312a57800de609ba73498e2002dc102b3e185f23058abae1f41b927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5b35aaf312a57800de609ba73498e2002dc102b3e185f23058abae1f41b927->enter($__internal_cc5b35aaf312a57800de609ba73498e2002dc102b3e185f23058abae1f41b927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ccd24e2a665d59104925e6d23508af40a5ca5e38283734b52bebf7697f6e83c->leave($__internal_1ccd24e2a665d59104925e6d23508af40a5ca5e38283734b52bebf7697f6e83c_prof);

        
        $__internal_cc5b35aaf312a57800de609ba73498e2002dc102b3e185f23058abae1f41b927->leave($__internal_cc5b35aaf312a57800de609ba73498e2002dc102b3e185f23058abae1f41b927_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a5c7fdb267726f061e965d141464fbae01b2c2b0c1939e8b143dac60e2d90764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c7fdb267726f061e965d141464fbae01b2c2b0c1939e8b143dac60e2d90764->enter($__internal_a5c7fdb267726f061e965d141464fbae01b2c2b0c1939e8b143dac60e2d90764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5329490b22cdf3afd45c94bba66eb35791bfd593f1f4294291046c14319a051a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5329490b22cdf3afd45c94bba66eb35791bfd593f1f4294291046c14319a051a->enter($__internal_5329490b22cdf3afd45c94bba66eb35791bfd593f1f4294291046c14319a051a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_5329490b22cdf3afd45c94bba66eb35791bfd593f1f4294291046c14319a051a->leave($__internal_5329490b22cdf3afd45c94bba66eb35791bfd593f1f4294291046c14319a051a_prof);

        
        $__internal_a5c7fdb267726f061e965d141464fbae01b2c2b0c1939e8b143dac60e2d90764->leave($__internal_a5c7fdb267726f061e965d141464fbae01b2c2b0c1939e8b143dac60e2d90764_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce626aa11cbf29ce1bcab3f0850fc89f3c27373d2832d1ef7df8c6df97bb5337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce626aa11cbf29ce1bcab3f0850fc89f3c27373d2832d1ef7df8c6df97bb5337->enter($__internal_ce626aa11cbf29ce1bcab3f0850fc89f3c27373d2832d1ef7df8c6df97bb5337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81359f8a9a85d13b0e2f44478aaf696a43fa4e2f2552c7309e1ad38c181ae99b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81359f8a9a85d13b0e2f44478aaf696a43fa4e2f2552c7309e1ad38c181ae99b->enter($__internal_81359f8a9a85d13b0e2f44478aaf696a43fa4e2f2552c7309e1ad38c181ae99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_81359f8a9a85d13b0e2f44478aaf696a43fa4e2f2552c7309e1ad38c181ae99b->leave($__internal_81359f8a9a85d13b0e2f44478aaf696a43fa4e2f2552c7309e1ad38c181ae99b_prof);

        
        $__internal_ce626aa11cbf29ce1bcab3f0850fc89f3c27373d2832d1ef7df8c6df97bb5337->leave($__internal_ce626aa11cbf29ce1bcab3f0850fc89f3c27373d2832d1ef7df8c6df97bb5337_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
