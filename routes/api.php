<?php

use App\Livewire\MovimentacaoCreate;
use App\Livewire\MovimentacaoIndex;
use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoEdit;
use App\Livewire\ProdutoIndex;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('produto/create', ProdutoCreate::class)->name('produto.create');
Route::get('produto/edit/{id}', ProdutoEdit::class)->name('produto.edit');
Route::get('produto', ProdutoIndex::class)->name('produto.index');
Route::get('movimentacao/create', MovimentacaoCreate::class)->name('movimentacao.create');
Route::get('movimentacao/index', MovimentacaoIndex::class)->name('movimentacao.index');
Route::get('login', Login::class)->name('login');
