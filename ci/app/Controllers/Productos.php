<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;

class Productos extends Controller
{

    public function index()
    {
        $producto = new Producto();
        $datos['productos'] = $producto->orderBy('id', 'ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['piepagina'] = view('template/cabecera');

        return view('productos/listar', $datos);
    }
    public function crear()
    {
        $datos['cabecera'] = view('template/cabecera');
        $datos['piepagina'] = view('template/cabecera');

        return view('productos/crear', $datos);
    }
    public function guardar()
    {
        $producto = new Producto();
        //haciendo la validacion de los campos
        $validacion = $this->validate([
            'Nombre_producto' => 'required|min_length[3]',
            'Categoria_producto' => 'required|min_length[4]',
            'Precio' => 'required|min_length[1]'
        ]);
        if (!$validacion) {
            $session = session();
            $session->setFlashdata('mensaje', 'Revise la informacion');

            return redirect()->back()->withInput();
            // return $this->response->redirect(site_url('/listar'));
        }

        $datos = [
            'Nombre_producto' => $this->request->getVar('Nombre_producto'),
            'Categoria_producto' => $this->request->getVar('Categoria_producto'),
            'Precio' => $this->request->getVar('Precio')
        ];
        $producto->insert($datos);
        return $this->response->redirect(site_url('/listar'));

        echo "ingresado ala base de datos";
    }
    public function borrar($id = null)
    {
        $producto = new Producto();

        $datosproducto = $producto->where('id', $id)->first();
        $producto->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/listar'));
    }
    public function editar($id = null)
    {
        print_r($id);
        $producto = new Producto();
        $datos['producto'] = $producto->where('id', $id)->first();
        $datos['cabecera'] = view('template/cabecera');
        $datos['piepagina'] = view('template/cabecera');


        return view('productos/editar', $datos);
        return $this->response->redirect(base_url('/listar'));
    }
    public function actualizar()
    {
        $producto = new Producto();
        //haciendo la validacion de los campos
        $validacion = $this->validate([
            'Nombre_producto' => 'required|min_length[3]',
            'Categoria_producto' => 'required|min_length[4]',
            'Precio' => 'required|min_length[1]'
        ]);
        if (!$validacion) {
            $session = session();
            $session->setFlashdata('mensaje', 'Revise la informacion');

            return redirect()->back()->withInput();
            // return $this->response->redirect(site_url('/listar'));
        }
        $datos = [
            'Nombre_producto' => $this->request->getVar('Nombre_producto'),
            'Categoria_producto' => $this->request->getVar('Categoria_producto'),
            'Precio' => $this->request->getVar('Precio')
        ];
        $id = $this->request->getVar('id');

        $producto->update($id, $datos);
    }
}
