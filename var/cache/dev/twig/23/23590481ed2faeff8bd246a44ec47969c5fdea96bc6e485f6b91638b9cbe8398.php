<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5b4bf61a3345ade44fe7afdc3967deac5e79a2c223b5200be9b079161bb519e6 extends Twig_Template
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
        $__internal_d186e565f0d53dfcbebea4361982c38a57a7a00f10873854cdd356dd25dfddaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d186e565f0d53dfcbebea4361982c38a57a7a00f10873854cdd356dd25dfddaf->enter($__internal_d186e565f0d53dfcbebea4361982c38a57a7a00f10873854cdd356dd25dfddaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_5e48483d7ad6d46eab9c6c5845bc36a4307aa0c49327cb398992ab435ff47858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e48483d7ad6d46eab9c6c5845bc36a4307aa0c49327cb398992ab435ff47858->enter($__internal_5e48483d7ad6d46eab9c6c5845bc36a4307aa0c49327cb398992ab435ff47858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d186e565f0d53dfcbebea4361982c38a57a7a00f10873854cdd356dd25dfddaf->leave($__internal_d186e565f0d53dfcbebea4361982c38a57a7a00f10873854cdd356dd25dfddaf_prof);

        
        $__internal_5e48483d7ad6d46eab9c6c5845bc36a4307aa0c49327cb398992ab435ff47858->leave($__internal_5e48483d7ad6d46eab9c6c5845bc36a4307aa0c49327cb398992ab435ff47858_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
