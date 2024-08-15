<div class="flex items-center justify-center">
    <form action={{ $action }} method="POST" onsubmit="return confirm('Are you sure you want to delete this {{ $nameOfInstance }}?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="w-12 px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
            <i class="fa fa-trash-can"></i>
        </button>
    </form>
</div>
