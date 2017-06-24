<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_8a81faeacd4fb2dcb7c39f2fd56d1cc7ad85e0bf808f5f673d10113a6e514d53 extends Twig_Template
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
        $__internal_356d925b596a33d95f364f5b489c7b11e6089c82f59ebca35097f47ee9d20d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356d925b596a33d95f364f5b489c7b11e6089c82f59ebca35097f47ee9d20d7f->enter($__internal_356d925b596a33d95f364f5b489c7b11e6089c82f59ebca35097f47ee9d20d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_251afd7a4a23a70d36825bdb011253a91047f8040844edbdca37b6f68d7182c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251afd7a4a23a70d36825bdb011253a91047f8040844edbdca37b6f68d7182c4->enter($__internal_251afd7a4a23a70d36825bdb011253a91047f8040844edbdca37b6f68d7182c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_356d925b596a33d95f364f5b489c7b11e6089c82f59ebca35097f47ee9d20d7f->leave($__internal_356d925b596a33d95f364f5b489c7b11e6089c82f59ebca35097f47ee9d20d7f_prof);

        
        $__internal_251afd7a4a23a70d36825bdb011253a91047f8040844edbdca37b6f68d7182c4->leave($__internal_251afd7a4a23a70d36825bdb011253a91047f8040844edbdca37b6f68d7182c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
