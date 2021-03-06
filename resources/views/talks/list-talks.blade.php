@extends('layouts.master')

@section('id', 'list-talks-page')
@section('title', trans('messages.talks'))

@section('content')
    <h2>
        <i class="fa fa-file-text-o"></i>
        {{ trans('messages.talks') }}
    </h2>
    @if($talks->count() > 0)
        <a href="{{ route('new-talk') }}" class="btn btn-primary pull-right">{{ trans('messages.create_new_talk') }}</a>
        {!! $talks !!}
        <table class="table">
            <thead>
            <tr>
                <th>{{ trans('messages.number') }}</th>
                <th>{{ trans('messages.subject') }}</th>
                <th>{{ trans('messages.prepared') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($talks as $talk)
                <tr>
                    <td>{{ $talk->number }}</td>
                    <td>
                        @if ($talk->titles->count() > 0)
                            {{ $talk->title }}
                        @else
                            <small class="text-muted"><i
                                        class="fa fa-exclamation-triangle"></i> {{ trans('messages.not_defined') }}
                            </small>
                        @endif
                    </td>
                    <td>{{ $talk->prepared->count() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $talks !!}
        <a href="{{ route('new-talk') }}" class="btn btn-primary pull-right">{{ trans('messages.create_new_talk') }}</a>
    @else
        <div class="alert alert-info">
            <i class="fa fa-exclamation"></i>
            {{ trans('messages.no_talks') }}.
            <a href="{{ route('new-talk') }}" class="btn btn-primary">{{ trans('messages.create_new_talk') }}</a>
        </div>
    @endif
@endsection
