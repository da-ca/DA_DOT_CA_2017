<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2ed730b545c36dc9b334277e4988eadd93bd95a4c71fc5ba0ca1543b32875567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_cc72ba7910b31ed9233c4d7d1064371eac16f8b54ba710f36537ec82345c639f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc72ba7910b31ed9233c4d7d1064371eac16f8b54ba710f36537ec82345c639f->enter($__internal_cc72ba7910b31ed9233c4d7d1064371eac16f8b54ba710f36537ec82345c639f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_eb62000e7db2349eba68cff3eaecd816651cd1d8819e75e7a0ad519274d955ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb62000e7db2349eba68cff3eaecd816651cd1d8819e75e7a0ad519274d955ee->enter($__internal_eb62000e7db2349eba68cff3eaecd816651cd1d8819e75e7a0ad519274d955ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc72ba7910b31ed9233c4d7d1064371eac16f8b54ba710f36537ec82345c639f->leave($__internal_cc72ba7910b31ed9233c4d7d1064371eac16f8b54ba710f36537ec82345c639f_prof);

        
        $__internal_eb62000e7db2349eba68cff3eaecd816651cd1d8819e75e7a0ad519274d955ee->leave($__internal_eb62000e7db2349eba68cff3eaecd816651cd1d8819e75e7a0ad519274d955ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2130ff6c6a76f0bd87d46764707f8201ce4f8e66a2ba72d4a2f8968dbccb6954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2130ff6c6a76f0bd87d46764707f8201ce4f8e66a2ba72d4a2f8968dbccb6954->enter($__internal_2130ff6c6a76f0bd87d46764707f8201ce4f8e66a2ba72d4a2f8968dbccb6954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_143893642f7a527e31bcba2ff96dfe8db058ac660a8346d2455cc6de93d9b9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143893642f7a527e31bcba2ff96dfe8db058ac660a8346d2455cc6de93d9b9ba->enter($__internal_143893642f7a527e31bcba2ff96dfe8db058ac660a8346d2455cc6de93d9b9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_143893642f7a527e31bcba2ff96dfe8db058ac660a8346d2455cc6de93d9b9ba->leave($__internal_143893642f7a527e31bcba2ff96dfe8db058ac660a8346d2455cc6de93d9b9ba_prof);

        
        $__internal_2130ff6c6a76f0bd87d46764707f8201ce4f8e66a2ba72d4a2f8968dbccb6954->leave($__internal_2130ff6c6a76f0bd87d46764707f8201ce4f8e66a2ba72d4a2f8968dbccb6954_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b344e1c8dfbcd757a6875562ef44437aa26d7e07c414c7b11aa0e0a8450c0480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b344e1c8dfbcd757a6875562ef44437aa26d7e07c414c7b11aa0e0a8450c0480->enter($__internal_b344e1c8dfbcd757a6875562ef44437aa26d7e07c414c7b11aa0e0a8450c0480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b12b3a55d6eb2395f9cd3318eceb5d50a2fd163b1053308a073c1d0e2a40ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b12b3a55d6eb2395f9cd3318eceb5d50a2fd163b1053308a073c1d0e2a40ddb->enter($__internal_9b12b3a55d6eb2395f9cd3318eceb5d50a2fd163b1053308a073c1d0e2a40ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9b12b3a55d6eb2395f9cd3318eceb5d50a2fd163b1053308a073c1d0e2a40ddb->leave($__internal_9b12b3a55d6eb2395f9cd3318eceb5d50a2fd163b1053308a073c1d0e2a40ddb_prof);

        
        $__internal_b344e1c8dfbcd757a6875562ef44437aa26d7e07c414c7b11aa0e0a8450c0480->leave($__internal_b344e1c8dfbcd757a6875562ef44437aa26d7e07c414c7b11aa0e0a8450c0480_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5e7d282cbba0f773498da02f84873b7cff8c13a51150a6134fd9f79fec8e9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5e7d282cbba0f773498da02f84873b7cff8c13a51150a6134fd9f79fec8e9fe->enter($__internal_a5e7d282cbba0f773498da02f84873b7cff8c13a51150a6134fd9f79fec8e9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4db86ecf9dee4b6ed3fa8c0e96214eda09a01d4509b7606ed1ca65975d8882a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4db86ecf9dee4b6ed3fa8c0e96214eda09a01d4509b7606ed1ca65975d8882a->enter($__internal_b4db86ecf9dee4b6ed3fa8c0e96214eda09a01d4509b7606ed1ca65975d8882a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_b4db86ecf9dee4b6ed3fa8c0e96214eda09a01d4509b7606ed1ca65975d8882a->leave($__internal_b4db86ecf9dee4b6ed3fa8c0e96214eda09a01d4509b7606ed1ca65975d8882a_prof);

        
        $__internal_a5e7d282cbba0f773498da02f84873b7cff8c13a51150a6134fd9f79fec8e9fe->leave($__internal_a5e7d282cbba0f773498da02f84873b7cff8c13a51150a6134fd9f79fec8e9fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
