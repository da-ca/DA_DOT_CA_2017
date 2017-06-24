<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4ca81e165c809b4eaf4b870b58b0f2475b2fb15110730e09c996d25dbb82f885 extends Twig_Template
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
        $__internal_d72d0b726344757415ceef6733e51d94d2d8a10b6c74a937037f9145e54590bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72d0b726344757415ceef6733e51d94d2d8a10b6c74a937037f9145e54590bd->enter($__internal_d72d0b726344757415ceef6733e51d94d2d8a10b6c74a937037f9145e54590bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_8ec438e888fa8ea0093b5b9cea2eff488bb758bee138b7e17d1748146c4bc3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec438e888fa8ea0093b5b9cea2eff488bb758bee138b7e17d1748146c4bc3ac->enter($__internal_8ec438e888fa8ea0093b5b9cea2eff488bb758bee138b7e17d1748146c4bc3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d72d0b726344757415ceef6733e51d94d2d8a10b6c74a937037f9145e54590bd->leave($__internal_d72d0b726344757415ceef6733e51d94d2d8a10b6c74a937037f9145e54590bd_prof);

        
        $__internal_8ec438e888fa8ea0093b5b9cea2eff488bb758bee138b7e17d1748146c4bc3ac->leave($__internal_8ec438e888fa8ea0093b5b9cea2eff488bb758bee138b7e17d1748146c4bc3ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
