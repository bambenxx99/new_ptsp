<?php defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf extends Dompdf
{

    public $filename;

    public function __construct()
    {
        parent::__construct();
        $this->filename = "Ticket.pdf";
    }

    protected function ci()
    {
        return get_instance();
    }

    public function load_view($view, $data = array())
    {

        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);
        $dompdf = new Dompdf($options);

        $html = $this->ci()->load->view($view, $data, TRUE);
        $this->load_html($html);
        $this->render();
        $this->stream($this->filename, array("Attachment" => false));
    }
}
