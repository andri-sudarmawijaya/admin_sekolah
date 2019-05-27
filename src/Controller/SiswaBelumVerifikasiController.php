<?php

namespace Drupal\admin_sekolah\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class SiswaBelumVerifikasiController.
 */
class SiswaBelumVerifikasiController extends ControllerBase {

  /**
   * Belumverifikasi.
   *
   * @return string
   *   Return Hello string.
   */
  public function belumVerifikasi() {
	
	if (!\Drupal::currentUser()->hasPermission('access content')) {
      return [
        '#type' => 'markup',
        '#markup' => $this->t('Anda tidak memiliki akses untuk halaman ini'),
      ];
    }

	$date = date('Y-m-d\TH:i:s',REQUEST_TIME);
    $dtimeFormat = new \Drupal\Core\Datetime\DrupalDateTime($date);
	
	//$dtime = DateTime::createFromFormat("m/d/Y - G:i", $row->Date); // not needed
	//$dtime->setTimezone(new \DateTimezone(DateTimeItemInterface::STORAGE_TIMEZONE));
	//$dtimeFormat = $dtime->format(DateTimeItemInterface::DATE_STORAGE_FORMAT);

	//$article->set('field_date', $dtimeFormat);
	
	  
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Siswa yang belum dilakukan verifikasi @datetime.', array('@datetime' => $dtimeFormat))
    ];
  }

}
