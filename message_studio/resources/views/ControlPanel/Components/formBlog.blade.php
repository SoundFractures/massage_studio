<div class="my-1 w-100">
    <hr>
</div>

<form>
    <div class="form-group">
      <label for="blog_title">Naslov</label>
        <input type="text" class="form-control" id="blog_title" name="title" value="{{$blog->title ?? ''}}" placeholder="{{$blog->title ?? ''}}" @isset($show) readonly  @endisset>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="blog_category">Kategorija</label>
                @isset($show)
               
                    <input type="text" class="form-control" id="blog_category" value="{{$category->name}}" readonly>
                @else

               
                
                <select class="form-control form-control-md" id="blog_category" name="category_id" @isset($show) disabled  @endisset>
                    @forEach($categories as $item)
                    @isset($blog)
                        @if($item == $blog->category)

                        <option selected value={{$item->id}}>{{$item->name}}</option>
                        @else
                        <option  value={{$item->id}}>{{$item->name}}</option>
                        @endif
                    @else
                    <option  value={{$item->id}}>{{$item->name}}</option>
                    @endisset

                    @endforEach
                </select>
                @endisset
            </div>
            <div class="col">
                @isset($show)
                <div class="my-1 mx-5">
                    <img src="/storage/images/{{$blog->file}}" alt="" style="max-height:250px;border-radius:5px;">
                </div>
                    
                @else 
                <label for="blog_file">Slika</label>
                <input type="file" class="form-control-file" name="file" id="blog_file">
                @endisset
            </div>
        </div>
      
    </div>
    <div class="form-group">
      <label for="blog_body">Telo</label>
      <textarea class="form-control" id="blog_body" name="body" rows="10" @isset($show) readonly  @endisset>{{$blog->body ?? ''}}</textarea>
    </div>
  </form>
