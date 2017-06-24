<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c922fc682ab8e73194e003ae4a4a0783cf81a98b37b11b430c70a75272d87672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6a8c5857b73bcf30f4b3c32a0ca7663931425ba360c30af9e14cccb42c9e358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a8c5857b73bcf30f4b3c32a0ca7663931425ba360c30af9e14cccb42c9e358->enter($__internal_e6a8c5857b73bcf30f4b3c32a0ca7663931425ba360c30af9e14cccb42c9e358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d30033d04e83bee5afefff0c2573c44e808ab0cd99dc819a164a8d37bccb7f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30033d04e83bee5afefff0c2573c44e808ab0cd99dc819a164a8d37bccb7f24->enter($__internal_d30033d04e83bee5afefff0c2573c44e808ab0cd99dc819a164a8d37bccb7f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e6a8c5857b73bcf30f4b3c32a0ca7663931425ba360c30af9e14cccb42c9e358->leave($__internal_e6a8c5857b73bcf30f4b3c32a0ca7663931425ba360c30af9e14cccb42c9e358_prof);

        
        $__internal_d30033d04e83bee5afefff0c2573c44e808ab0cd99dc819a164a8d37bccb7f24->leave($__internal_d30033d04e83bee5afefff0c2573c44e808ab0cd99dc819a164a8d37bccb7f24_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f222a4b06275c964e7a4543e391c841ea7698dab4e6514e16e1ddf29046a48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f222a4b06275c964e7a4543e391c841ea7698dab4e6514e16e1ddf29046a48c->enter($__internal_6f222a4b06275c964e7a4543e391c841ea7698dab4e6514e16e1ddf29046a48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2274db93696c1c691aadad099fd5a3b7a25dbe8657be85fc7ff7573cadc0c32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2274db93696c1c691aadad099fd5a3b7a25dbe8657be85fc7ff7573cadc0c32c->enter($__internal_2274db93696c1c691aadad099fd5a3b7a25dbe8657be85fc7ff7573cadc0c32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2274db93696c1c691aadad099fd5a3b7a25dbe8657be85fc7ff7573cadc0c32c->leave($__internal_2274db93696c1c691aadad099fd5a3b7a25dbe8657be85fc7ff7573cadc0c32c_prof);

        
        $__internal_6f222a4b06275c964e7a4543e391c841ea7698dab4e6514e16e1ddf29046a48c->leave($__internal_6f222a4b06275c964e7a4543e391c841ea7698dab4e6514e16e1ddf29046a48c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
