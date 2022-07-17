<x-library-blueprint>
    @section('styles')
    <style>
        nav {
            position : absolute;
            opacity : 0;
        }

        nav:hover {
            opacity : 1;
        }

        #container {
            background : var(--color-dark);
            color : var(--color-white);
            min-height : 100vh;
            padding : 1rem;
        }

        #content {
            width : 600px;
            padding : 1rem;
            text-align : left;
            margin : auto;
            font-family :'Times New Roman', Times, serif;
            line-height : 30px;
        }
    </style>
    @endsection
    <div id="container">

        <h1>
            {{ $part->title }}
        </h1>
        
        <div id = "content">
            {{-- {{ $part->content }} --}}
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ipsum sequi sit neque debitis harum provident ipsam magni a perspiciatis hic enim culpa, praesentium commodi facilis explicabo, cumque ab maxime quaerat delectus. Veniam magni, consectetur incidunt consequuntur id cupiditate! Harum ad fugiat quidem dolore est sed iusto totam. Sint nemo quaerat voluptatibus unde optio quisquam dicta blanditiis architecto, numquam praesentium fuga vero mollitia ratione magni. Provident, dolorem. Doloremque architecto dolor, sunt placeat exercitationem quos et unde. Nisi, sequi nobis recusandae expedita maxime nostrum illo. Nisi rem laudantium eos. Mollitia enim culpa odit nulla, quo veritatis perferendis odio doloremque sed rem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem amet totam, sit earum ipsam inventore pariatur qui porro numquam, labore neque eaque laboriosam itaque, ullam impedit saepe suscipit praesentium! Eos ex obcaecati ad! Iusto animi laudantium, est officiis ad possimus optio, asperiores ipsam sint facere ea maxime! Eius facere quia, facilis consectetur quod, aspernatur dicta minus molestiae consequuntur, beatae eveniet cum doloribus voluptate? Repellat ad cupiditate molestias asperiores dolor debitis? Debitis eum accusantium dolorem animi illum officiis fuga explicabo facere aliquid rerum nemo voluptatum hic quas reiciendis vero dignissimos nulla sapiente, exercitationem adipisci non. Dignissimos officia harum repellat nobis voluptatum hic quisquam eaque quo obcaecati libero soluta, ullam iure quasi pariatur! Voluptatibus a ipsam sint, voluptates tempore laborum non rerum fugit praesentium consequatur possimus! Numquam repudiandae praesentium, omnis reprehenderit dolorem dolorum quo doloremque tempore nulla modi, corrupti magni quas eveniet cumque voluptatem, assumenda unde. Officiis odio quasi nesciunt debitis, expedita doloremque fuga suscipit nemo nostrum incidunt molestiae sint porro laudantium ad voluptas sit nam cupiditate, possimus enim natus tempora tempore aliquid rerum! Asperiores beatae nemo tempore ipsa, at placeat soluta officia adipisci commodi quia repellat iste, nam sit laborum, corporis perferendis! Totam odio placeat iure quas sapiente nesciunt. Repellendus incidunt doloremque velit, accusamus ea aut ipsam, distinctio nobis cupiditate earum exercitationem laborum voluptatum laboriosam ipsum quia, possimus vero mollitia tempore. Ab, mollitia omnis molestiae porro magni maiores pariatur illo fuga. Obcaecati nulla magnam voluptatibus ea a tempore deserunt, quasi fugit, sapiente labore saepe facere sed ad et exercitationem asperiores molestiae veniam voluptatem, rerum esse recusandae tenetur. Laborum odio veniam ducimus alias saepe molestias inventore voluptatem. Aut suscipit quis facere enim, magni porro earum, est, atque neque repudiandae commodi aliquam fuga aliquid facilis cupiditate accusamus vero odit at deserunt. Alias dolore voluptatem earum numquam cupiditate exercitationem aperiam sequi consequuntur voluptates vitae?
        </div>
    </div>
</x-library-blueprint>