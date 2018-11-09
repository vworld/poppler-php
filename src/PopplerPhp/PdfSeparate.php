<?php
/**
 * Poppler-PHP
 *
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/14/2016
 * Time:    3:34 PM
 **/

namespace NcJoes\PopplerPhp;

use NcJoes\PopplerPhp\Constants as C;
use NcJoes\PopplerPhp\PopplerOptions\CairoOptions;
use NcJoes\PopplerPhp\PopplerOptions\HelpFlags;
use NcJoes\PopplerPhp\PopplerOptions\PageRangeOptions;


class PdfSeparate extends PopplerUtil
{
    /**
     * PdfSeparate constructor.
     *
     * @param string $pdfFile
     * @param array $options
     */
    public function __construct($pdfFile = '', array $options = [])
    {
        $this->bin_file = C::PDF_SEPARATE;

        return parent::__construct($pdfFile, $options);
    }


    public function utilOptions()
    {
        // TODO: Implement utilOptions() method.
    }

    public function utilOptionRules()
    {
        // TODO: Implement utilOptionRules() method.
    }

    public function utilFlags()
    {
        // TODO: Implement utilFlags() method.
    }

    public function utilFlagRules()
    {
        // TODO: Implement utilFlagRules() method.
    }

    public function outputExtension()
    {
        return '.pdf';
    }

    /**
     * @return string
     */
    public function generate()
    {
        $this->output_file_extension = $this->outputExtension();

        return $this->shellExec();
    }


}