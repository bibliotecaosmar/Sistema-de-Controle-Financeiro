{"filter":false,"title":"2018_06_03_040423_create_previsao_table.php","tooltip":"/database/migrations/2018_06_03_040423_create_previsao_table.php","undoManager":{"mark":17,"position":17,"stack":[[{"start":{"row":14,"column":8},"end":{"row":14,"column":10},"action":"remove","lines":["//"],"id":2},{"start":{"row":14,"column":8},"end":{"row":21,"column":11},"action":"insert","lines":["Schema::create('contas', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('codigo');","            $table->string('titulo');","            $table->integer('tipo');","            $table->text('descricao')->nullable();","            $table->timestamps();","        });"]}],[{"start":{"row":31,"column":8},"end":{"row":31,"column":10},"action":"remove","lines":["//"],"id":3},{"start":{"row":31,"column":8},"end":{"row":31,"column":31},"action":"insert","lines":["Schema::drop('contas');"]}],[{"start":{"row":31,"column":22},"end":{"row":31,"column":28},"action":"remove","lines":["contas"],"id":4},{"start":{"row":31,"column":22},"end":{"row":31,"column":23},"action":"insert","lines":["p"]},{"start":{"row":31,"column":23},"end":{"row":31,"column":24},"action":"insert","lines":["r"]},{"start":{"row":31,"column":24},"end":{"row":31,"column":25},"action":"insert","lines":["e"]},{"start":{"row":31,"column":25},"end":{"row":31,"column":26},"action":"insert","lines":["v"]},{"start":{"row":31,"column":26},"end":{"row":31,"column":27},"action":"insert","lines":["i"]},{"start":{"row":31,"column":27},"end":{"row":31,"column":28},"action":"insert","lines":["s"]},{"start":{"row":31,"column":28},"end":{"row":31,"column":29},"action":"insert","lines":["a"]},{"start":{"row":31,"column":29},"end":{"row":31,"column":30},"action":"insert","lines":["o"]}],[{"start":{"row":31,"column":29},"end":{"row":31,"column":30},"action":"remove","lines":["o"],"id":5},{"start":{"row":31,"column":28},"end":{"row":31,"column":29},"action":"remove","lines":["a"]}],[{"start":{"row":31,"column":28},"end":{"row":31,"column":29},"action":"insert","lines":["o"],"id":6},{"start":{"row":31,"column":29},"end":{"row":31,"column":30},"action":"insert","lines":["e"]},{"start":{"row":31,"column":30},"end":{"row":31,"column":31},"action":"insert","lines":["s"]}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":30},"action":"remove","lines":["contas"],"id":7},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["p"]},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["r"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":["e"]},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["v"]},{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":["i"]},{"start":{"row":14,"column":29},"end":{"row":14,"column":30},"action":"insert","lines":["s"]},{"start":{"row":14,"column":30},"end":{"row":14,"column":31},"action":"insert","lines":["o"]},{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"insert","lines":["e"]},{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":38},"action":"remove","lines":["integer('codigo');"],"id":9},{"start":{"row":16,"column":20},"end":{"row":16,"column":39},"action":"insert","lines":["date('created_at');"]}],[{"start":{"row":16,"column":26},"end":{"row":16,"column":36},"action":"remove","lines":["created_at"],"id":10},{"start":{"row":16,"column":26},"end":{"row":16,"column":27},"action":"insert","lines":["d"]},{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"insert","lines":["a"]},{"start":{"row":16,"column":28},"end":{"row":16,"column":29},"action":"insert","lines":["t"]},{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"insert","lines":["a"]},{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"insert","lines":["_"]}],[{"start":{"row":16,"column":31},"end":{"row":16,"column":32},"action":"insert","lines":["p"],"id":11},{"start":{"row":16,"column":32},"end":{"row":16,"column":33},"action":"insert","lines":["r"]},{"start":{"row":16,"column":33},"end":{"row":16,"column":34},"action":"insert","lines":["e"]},{"start":{"row":16,"column":34},"end":{"row":16,"column":35},"action":"insert","lines":["v"]},{"start":{"row":16,"column":35},"end":{"row":16,"column":36},"action":"insert","lines":["i"]},{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"insert","lines":["s"]},{"start":{"row":16,"column":37},"end":{"row":16,"column":38},"action":"insert","lines":["a"]},{"start":{"row":16,"column":38},"end":{"row":16,"column":39},"action":"insert","lines":["o"]}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":37},"action":"remove","lines":["string('titulo');"],"id":12},{"start":{"row":17,"column":20},"end":{"row":17,"column":44},"action":"insert","lines":["decimal('amount', 8, 2);"]}],[{"start":{"row":17,"column":29},"end":{"row":17,"column":35},"action":"remove","lines":["amount"],"id":13},{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["v"]},{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"insert","lines":["a"]},{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"insert","lines":["l"]},{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"insert","lines":["o"]},{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"insert","lines":["r"]},{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["_"]},{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"insert","lines":["p"]},{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["r"]},{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["v"],"id":14},{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"insert","lines":["i"]},{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"insert","lines":["s"]},{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"insert","lines":["a"]},{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"insert","lines":["o"]}],[{"start":{"row":17,"column":46},"end":{"row":17,"column":47},"action":"remove","lines":["8"],"id":15}],[{"start":{"row":17,"column":46},"end":{"row":17,"column":47},"action":"insert","lines":["7"],"id":16}],[{"start":{"row":17,"column":46},"end":{"row":17,"column":47},"action":"remove","lines":["7"],"id":17}],[{"start":{"row":17,"column":46},"end":{"row":17,"column":47},"action":"insert","lines":["8"],"id":18}],[{"start":{"row":17,"column":52},"end":{"row":18,"column":36},"action":"remove","lines":["","            $table->integer('tipo');"],"id":19}],[{"start":{"row":17,"column":52},"end":{"row":18,"column":50},"action":"remove","lines":["","            $table->text('descricao')->nullable();"],"id":20}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":52},"end":{"row":17,"column":52},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527998814814,"hash":"07dbac1c4ea257d01b798e27f27d34bf9d2b0812"}