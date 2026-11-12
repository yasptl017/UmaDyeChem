@extends('layouts.admin')

@section('title', 'Manage Blog Posts')
@section('page_title', 'Blog & Articles')
@section('page_subtitle', 'Publish company news, industry insights, and chemical knowledge articles.')

@section('header_actions')
    <a href="{{ route('admin.blog.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-xs transition-colors">
        <i class="fa-solid fa-plus"></i> Add New Post
    </a>
@endsection

@section('content')

<div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-xs mb-6 flex flex-col sm:flex-row gap-4 items-center justify-between">
    <form action="{{ route('admin.blog.index') }}" method="GET" class="w-full sm:w-80">
        <div class="relative">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by title..." class="w-full pl-9 pr-3 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-700">
            <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-slate-400 text-xs"></i>
        </div>
    </form>
    <div class="text-xs text-slate-500 font-medium">
        Total Posts: <strong>{{ $posts->total() }}</strong>
    </div>
</div>

<div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider">
                    <th class="py-3 px-4">Title & Category</th>
                    <th class="py-3 px-4">Author</th>
                    <th class="py-3 px-4">Published</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
                @forelse($posts as $post)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4">
                            <div class="font-bold text-slate-900 text-sm">
                                <a href="{{ route('admin.blog.edit', $post->id) }}" class="hover:text-brand-700">{{ $post->title }}</a>
                            </div>
                            <div class="text-[11px] text-slate-500 mt-0.5">
                                <span class="px-2 py-0.5 rounded-full bg-slate-100 font-medium">{{ $post->category ?? 'Uncategorized' }}</span>
                            </div>
                        </td>
                        <td class="py-3 px-4">{{ $post->author_name }}</td>
                        <td class="py-3 px-4">{{ $post->published_at?->format('d M Y') ?? '-' }}</td>
                        <td class="py-3 px-4">
                            @if($post->is_published)
                                <span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-bold text-[10px]">Published</span>
                            @else
                                <span class="px-2 py-0.5 rounded-full bg-slate-100 text-slate-500 font-bold text-[10px]">Draft</span>
                            @endif
                        </td>
                        <td class="py-3 px-4 text-right space-x-2">
                            <a href="{{ route('blog.show', $post->slug) }}" target="_blank" class="p-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-600 inline-block" title="View Public Page">
                                <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                            </a>
                            <a href="{{ route('admin.blog.edit', $post->id) }}" class="p-1.5 rounded-lg bg-brand-50 hover:bg-brand-100 text-brand-700 inline-block" title="Edit">
                                <i class="fa-solid fa-pen-to-square text-xs"></i>
                            </a>
                            <form action="{{ route('admin.blog.destroy', $post->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-1.5 rounded-lg bg-rose-50 hover:bg-rose-100 text-rose-600" title="Delete">
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-8 text-center text-slate-500">No blog posts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($posts->hasPages())
        <div class="p-4 border-t border-slate-200">
            {{ $posts->links() }}
        </div>
    @endif
</div>

@endsection
