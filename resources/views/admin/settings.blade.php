@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('settings.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Телефон номер (отдел продаж) *номера написать через запятой</label>
                    <input type="text" name="top_contact_sells" value="{{ $settings->top_contact_sells }}">
                </div>

                <div class="form-group">
                    <label>Телефон номер директора</label>
                    <input type="text" name="director_contact" value="{{ $settings->director_contact }}">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ $settings->email }}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@stop
