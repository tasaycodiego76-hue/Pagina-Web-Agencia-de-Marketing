<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use SendinBlue\Client\Configuration;
use SendinBlue\Client\Api\TransactionalEmailsApi;
use SendinBlue\Client\Model\SendSmtpEmail;
class ContactoController extends Controller
{
    public function submit(Request $request)
    {
        // Validación de los datos recibidos del formulario
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|regex:/^9\d{8}$/',
            'message' => 'required|string',
        ]);

        // Crear el cliente de Guzzle
        $client = new Client();

        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', env('BREVO_API_KEY'));

        $apiInstance = new TransactionalEmailsApi($client, $config);

        // Preparar el contenido del correo electrónico
        $sendSmtpEmail = new SendSmtpEmail([
            'subject' => 'Nuevo mensaje de contacto',
            'sender' => ['name' => $data['name'], 'email' => $data['email']],
            'to' => [['email' => 'rodrigofelix.fotografo@gmail.com', 'name' => 'Rodrigo']],
            'htmlContent' => "
                <p><strong>Nombre:</strong> {$data['name']}</p>
                <p><strong>Email:</strong> {$data['email']}</p>
                <p><strong>Teléfono:</strong> {$data['phone']}</p>
                <p><strong>Mensaje:</strong><br>{$data['message']}</p>
            "
        ]);

        try {
            // Enviar el correo utilizando la API de Brevo
            $apiInstance->sendTransacEmail($sendSmtpEmail);
            return back()->with('success', 'Tu mensaje ha sido enviado con éxito.');
        } catch (\Exception $e) {
            // Manejo de errores si el envío falla
            return back()->with('error', 'Error al enviar el mensaje: ' . $e->getMessage());
        }
    }
  
    }
    
    
