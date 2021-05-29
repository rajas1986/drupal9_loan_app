<?php

    namespace Drupal\fivepaisa_loan_app\Plugin\Block;

    use Drupal\Core\Block\BlockBase;

    /**
     * Provides a 'LoanAppModuleBlock' block.
     *
     * @Block(
     *   id = "preferred_landing_borrowing_block",
     *   admin_label = @Translation("Preferred Landing Borrowing Block"),
     *   category = @Translation("Loan App Module Blocks")
     * )
    */
    class LoanAppModuleBlock extends BlockBase {

     /**
      * {@inheritdoc}
     */
     public function build() {

       $form = \Drupal::formBuilder()->getForm('Drupal\fivepaisa_loan_app\Form\PreferredLandingBorrowing');

       return $form;
     }
   }
