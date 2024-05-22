<?php

/* BibliotecaDemoBundle:Default:buscarLibroTitulo.html.twig */
class __TwigTemplate_6d7f67b3c894d6833fe7e1c6b08a19002b19f61b1174b323e685b53e7e0a72a2 extends Twig_Template
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
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Título de la Página</title>
    <style>
        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        /* Estilos para las filas impares */
        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        /* Estilos para el encabezado de la tabla */
        th {
            background-color: #007bff;
            color: white;
        }

        /* Estilos para los enlaces */
        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "</body>
</html>
";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "    <h1>Listado de libros</h1>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Sinopsis</th>
                <th>Fecha de Publicación</th>
                <th>Editorial</th>
                <th>ISBN</th>
                <th>Ejemplares</th>
                <th>Biblioteca</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Horario de Apertura</th>
                <th>Horario de Cierre</th>
                <th>Fecha de Fundación</th>
                <th>Normas</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")));
        foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
            // line 67
            echo "                <tr>
                    <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "titulo"), "html", null, true);
            echo "</td>
                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "autor"), "html", null, true);
            echo "</td>
                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "sinopsis"), "html", null, true);
            echo "</td>
                    <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "fechaPublicacion"), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "editorial"), "html", null, true);
            echo "</td>
                    <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "isbn"), "html", null, true);
            echo "</td>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "ejemplares"), "html", null, true);
            echo "</td>
                    <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "biblioteca"), "nombre"), "html", null, true);
            echo "</td>
                    <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "biblioteca"), "direccion"), "html", null, true);
            echo "</td>
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "biblioteca"), "ciudad"), "html", null, true);
            echo "</td>
                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "biblioteca"), "horarioApertura"), "H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "biblioteca"), "horarioCierre"), "H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "biblioteca"), "fechaFundacion"), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "biblioteca"), "normas"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </tbody>
    </table>
    ";
    }

    public function getTemplateName()
    {
        return "BibliotecaDemoBundle:Default:buscarLibroTitulo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  167 => 84,  158 => 81,  154 => 80,  150 => 79,  146 => 78,  142 => 77,  138 => 76,  134 => 75,  130 => 74,  126 => 73,  122 => 72,  118 => 71,  114 => 70,  110 => 69,  106 => 68,  103 => 67,  99 => 66,  75 => 44,  72 => 43,  66 => 87,  64 => 43,  20 => 1,);
    }
}
