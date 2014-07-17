<?php
/**
 * Controller for module
 *
 * @author Anurag
 *
 */
class Insync_Sync_Adminhtml_SyncController extends Mage_Adminhtml_Controller_Action {

	public function indexAction() {

		$this->_title($this->__('Dashboard'))->_title($this->__('InSync'));
		$this->loadLayout();
		$this->_setActiveMenu('dashboard');
		$this->_addContent($this->getLayout()
				->createBlock('insync_sync/adminhtml_product'));
		$this->renderLayout();
	}

	public function exportInsyncCsvAction()
	{
		$fileName = 'orders_insync.csv';
		$grid = $this->getLayout()->createBlock('insync_sync/adminhtml_Product_grid');
		$this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
	}
	public function exportInsyncExcelAction()
	{
		$fileName = 'orders_insync.xml';
		$grid = $this->getLayout()->createBlock('insync_sync/adminhtml_Product_grid');
		$this->_prepareDownloadResponse($fileName, $grid->getExcelFile($fileName));
	}
}