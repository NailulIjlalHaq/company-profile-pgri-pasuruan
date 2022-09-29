@if ($paginator->hasPages())
<div class="pagination py-50">
    <div class="pagination-wrapper">
        @if(!$paginator->onFirstPage())
        <a href="{{ $paginator->previousPageUrl() }}" class="pagination-wrapper--prev">
            <ion-icon name="arrow-back-circle"></ion-icon>Sebelumnya
        </a>
        @endif
        @if($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="pagination-wrapper--next">Selanjutnya<ion-icon name="arrow-forward-circle">
            </ion-icon>
        </a>
        @endif
    </div>
</div>
@endif