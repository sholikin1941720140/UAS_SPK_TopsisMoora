@extends('dashboard.layouts.main')

@section('container')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-2">
                    <h3>Create Matriks</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Create Matriks
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ url('dashboard/matriks') }}" method="POST" class="form">
                                        @csrf
                                        <div class="row" id="dynamicAddRemove3">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Alternatif</label>
                                                    <select
                                                        class="form-select @error('alternatif_id') is-invalid @enderror"
                                                        id="alternatif_id" name="addMoreInputFields[0][alternatif_id]"
                                                        value="{{ old('alternatif_id') }}">
                                                        <option selected>Pilih...</option>
                                                        @foreach ($alternatifs as $alternatif)
                                                            <option value="{{ $alternatif->id }}">{{ $alternatif->code }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('alternatif_id')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Kriteria</label>
                                                    <select
                                                        class="form-select @error('kriteria_id') is-invalid @enderror"
                                                        id="kriteria_id" name="addMoreInputFields[0][kriteria_id]"
                                                        value="{{ old('kriteria_id') }}">
                                                        <option selected>Pilih...</option>
                                                        @foreach ($kriterias as $kriteria)
                                                            <option value="{{ $kriteria->id }}">{{ $kriteria->code }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('kriteria_id')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Nilai</label>
                                                    <input type="text"
                                                        class="form-control
                                                        @error('value') is-invalid @enderror"
                                                        id="value" name="addMoreInputFields[0][value]"
                                                        placeholder="Nilai..." value="{{ old('value') }}">
                                                        @error('value')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="button" name="add" id="dynamic-ar-3" class="btn btn-outline-primary me-1 mb-1">
                                                    Add Data
                                                </button>
                                                <button type="submit" class="btn btn-primary me-1 mb-1">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                    Reset
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
