<select class="io-select2 form-select appointment-change-payment-status payment-status"
        data-control="select2"
        data-id="{{$row->id}}">
    <option value="{{ $paid }}" {{( $row->payment_type ==
                $paid) ? 'selected' : ''}}>{{__('messages.transaction.paid')}}
    </option>
    <option value="{{$pending}}" {{( $row->payment_type ==
                $paid) ? 'disabled' : 'selected'}}>{{ __('messages.transaction.pending')}}
    </option>
</select>
