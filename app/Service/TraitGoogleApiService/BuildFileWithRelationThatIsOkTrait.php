<?php

namespace App\Service\TraitGoogleApiService;

use App\Factory\FactoryHelper;

trait BuildFileWithRelationThatIsOkTrait {

	public function buildFileWithRelationThatIsOkTrait() {

		$this->log->info($this->text->buildProcessFileOrientation);

		$this->context->stateFile = FactoryHelper::start()->stateFile();

//		if(!$this->context->stateFile->thisFileExiste()) {
			
			dd($this->context->fileProcess);		 
			$this->context->stateFile->thisFileExiste();
			$this->context->stateFile->setInformation(
				$this->context->fileProcess->getFiles()
			);
			
			$this->context->stateFile->createFile();
			$this->context->stateFile->writeInformationOnAddressFile();

//		}

	}

}