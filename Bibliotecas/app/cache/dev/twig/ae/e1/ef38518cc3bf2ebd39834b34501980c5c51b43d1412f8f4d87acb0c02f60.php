<?php

/* BibliotecaDemoBundle:Default:annadirLibro.html.twig */
class __TwigTemplate_aee1ef38518cc3bf2ebd39834b34501980c5c51b43d1412f8f4d87acb0c02f60 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Formulario de Libro</title>
    <style>
        form {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type=\"text\"], input[type=\"submit\"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box; 
        }

        input[type=\"submit\"] {
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        input[type=\"submit\"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("annadirLibro");
        echo "\" method=\"post\">
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Insertar\"/>
    </form>
</body>
</html>




";
    }

    public function getTemplateName()
    {
        return "BibliotecaDemoBundle:Default:annadirLibro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 43,  62 => 42,  19 => 1,);
    }
}
