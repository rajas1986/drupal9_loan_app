<?php

    namespace Drupal\fivepaisa_loan_app\Plugin\Block;

    use Drupal\Core\Block\BlockBase;

   /**
     * Provides a 'Lend Smart with Five Paisa' block.
     *
     * @Block(
     *   id = "borrow_money_with_fivepaisa_block",
     *   admin_label = @Translation("Borrow Money With FivePaisa Block"),
     *   category = @Translation("Loan App Module Blocks")
     * )
    */
    class BorrowMoneyWithFivePaisaLoanBlock extends BlockBase {

     /**
      * {@inheritdoc}
     */
     public function build() {

       $form = \Drupal::formBuilder()->getForm('Drupal\fivepaisa_loan_app\Form\PreferredLandingBorrowing');

       return $form;
     }
   }