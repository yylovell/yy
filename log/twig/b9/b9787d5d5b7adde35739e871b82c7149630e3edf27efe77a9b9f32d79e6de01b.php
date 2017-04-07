<?php

/* index.html */
class __TwigTemplate_7ecb1f080cc8d4099d6d400af9a78d111045dc42bff95d50f8df25842f5648a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1><img src=\"../core/public/app/img/logo.png\"/>欢迎使用yy框架。。。</h1>
<pre>
    My name is yaoyuan , I only want to do something I like.....
</pre>

";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block body %}
<h1><img src=\"../core/public/app/img/logo.png\"/>欢迎使用yy框架。。。</h1>
<pre>
    My name is yaoyuan , I only want to do something I like.....
</pre>

{% endblock%}", "index.html", "/Applications/XAMPP/xamppfiles/htdocs/yy/app/view/index.html");
    }
}
