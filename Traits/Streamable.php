<?php

trait Streamable
{
    public $streaming_services = [];

    public function set_streaming_services(String $service)
    {
        // Aggiungo un controllo per evitare di inserire più volte lo stesso servizio
        if (!in_array($service, $this->streaming_services)) {
            array_push($this->streaming_services, $service);
        }
        // BONUS: Volendo si potrebbe lanciare un'eccezione
        // BONUS 2: Oltre a lanciare l'eccezione, si potrebbe includere il tutto in un blocco try-catch e mostrare un errore in pagina
    }

    public function get_streaming_services_as_string()
    {
        return implode(', ', $this->streaming_services);
    }
}
