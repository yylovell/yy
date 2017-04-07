<?php

/* layout.html */
class __TwigTemplate_032c9c26b6dfeb544f692f41e9ee9800e96c797478fe6ac196832ae66f59e4bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>YY</title>
    <link rel=\"stylesheet\" href=\"../core/public/css/common.css\">
</head>
<body>
";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "<footer>
    <span>-- yao yuan</span>

</footer>
</body>
</html>";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  41 => 9,  32 => 12,  30 => 9,  20 => 1,);
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>YY</title>
    <link rel=\"stylesheet\" href=\"../core/public/css/common.css\">
</head>
<body>
{%block body%}

{%endblock%}
<footer>
    <span>-- yao yuan</span>

</footer>
</body>
</html>", "layout.html", "/Applications/XAMPP/xamppfiles/htdocs/yy/app/view/layout.html");
    }
}
