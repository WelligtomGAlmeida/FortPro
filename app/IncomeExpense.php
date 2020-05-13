<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomeExpense extends Model
{
    protected $table = 'incomes_expenses';

    protected $fillable = [
        'person_id',
        'account_id',
        'recurrence_id',
        'payment_status_id',
        'transaction_movement_id',
        'transaction_participant_id',
        'name',
        'description',
        'value',
        'installments',
        'operation_date'
    ];

    function person(){
        return $this->belongsTo('App\Person');
    }

    function account(){
        return $this->belongsTo('App\Account');
    }

    function recurrence(){
        return $this->belongsTo('App\Recurrence');
    }

    function paymentStatus(){
        return $this->belongsTo('App\PaymentStatus');
    }

    function transactionMovement(){
        return $this->belongsTo('App\TransactionMovement');
    }

    function transactionParticipant(){
        return $this->belongsTo('App\TransactionParticipant');
    }

    function transactions(){
        return $this->hasMany('App\Transaction');
    }

    function creditedLoans(){
        return $this->hasMany('App\Loan', 'income_id', 'id');
    }

    function debitedLoans(){
        return $this->hasMany('App\Loan', 'expense_id', 'id');
    }

    function transactionCategories(){
        return $this->belongsToMany("App\TransactionCategory", "transaction_category_relationship")->withPivot(['created_at', 'updated_at']);
    }
}
