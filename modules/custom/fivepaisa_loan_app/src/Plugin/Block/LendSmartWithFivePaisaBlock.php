<?php

    namespace Drupal\fivepaisa_loan_app\Plugin\Block;

    use Drupal\Core\Block\BlockBase;

   /**
     * Provides a 'Lend Smart with Five Paisa' block.
     *
     * @Block(
     *   id = "lend_smart_with_fivepaisa_block",
     *   admin_label = @Translation("Lend Smart With FivePaisa Block"),
     *   category = @Translation("Loan App Module Blocks")
     * )
    */
    class LendSmartWithFivePaisaBlock extends BlockBase {

     /**
      * {@inheritdoc}
     */
     public function build() {

       $form = \Drupal::formBuilder()->getForm('Drupal\fivepaisa_loan_app\Form\PreferredLandingBorrowing');

       return $form;
     }
   }