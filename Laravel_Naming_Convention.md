# knowledge-noteにおけるLaravelの命名規則と少しだけのコーディング規約

## - 概要

このプロジェクトにおいてのLaravel命名規則とLaravelコーディング規約についてまとめたものです。

作成にあたって調査したところ、PHPは`PSR-2`というコーディング規約に則って記述される様でした。

しかし、[PSR-2のホームページ](https://www.php-fig.org/psr/psr-2/) によると、PSR-2は非推奨になっており、新たに [PSR-12](https://www.php-fig.org/psr/psr-12/) が推奨されていました。

ですのでこの 命名規則及び少しだけのコーディング規約 のコーディング規約は`PSR-12`に準じた形にさせていただきます。

コーティング規約を作成する際は、規約をあまりガチガチにしてしまうと開発に慣れているエンジニアにとって開発しにくくなる原因になってしまうようです。

## - 表記法の解説

- キャメルケース
```php
$readableCode

// 二つ目以降の単語の先頭を大文字で記述する記法
// キャメル(ラクダ)のコブに見えることから
```

- アッパーキャメルケース
```php
$ReadableCode

// 一つ目の単語から単語の先頭を大文字で記述する記法
// アッパーは大文字の意味
```

- スネークケース
```php
$readable_code

// 単語同士をアンダーバーで連結する記法
// スネーク(蛇)に見える(?)ことから
```

- ケバブケース
```php
$readable-code

// 単語同士をハイフンで連結する記法
// 食べ物のケバブに見えることから
```

## - 命名規則

| 種類 | 記法 | 複数or単数 | 例 | 補足 |
| --- | --- | --- | --- | --- |
| **phpファイル** | アッパーキャメルケース | --- | AppServiceProvider.php | |
| **source/app配下のディレクトリ名** | アッパーキャメルケース | --- | source/app/Service | |
| **変数名** | スネークケース | --- | $user_data |  |
| **メソッド(関数)名** | キャメルケース | --- | getGreeting() | |
| **クラス名** | アッパーキャメルケース | --- | ClassName | |
| **インターフェース** | アッパーキャメルケース + Interface | --- | UserInterface | |
| **モデル名** | アッパーキャメルケース | 単数 | UserData | |
| **views** | スネークケース | --- | show_profile.blade.php | |
| **url** | ケバブケース | 単数 | user-profile | |

その他は、必要になったタイミングで追加します...

## - コーディング規約

#### 変数名

- 変数名に日本語は使用しない

- 変数名、関数名、クラス名など、名前をつけることができるものに関しては、英単語を用いる

- 命名に悩み`眠れなくなった場合`はコミュニティで募集してみよう！

- 大文字のみの変数宣言は禁止とし、定数の場合のみ適用されます

#### 制御構造

- if文やfor文など制御構造の `{` は独立した行にしない
```php
if ($one === 1)
{
　　　　 // これはNG
}

if ($one === 1) {
        // これはGood
}
```

- また制御構造の `(` の前と、 `)` の後ろには1つのスペースが必要です 
```php
if($one === 1){
        // スペースがないのでNG
}

if ($one === 1) {
        // スペースをつけてGood
}
```

- 比較演算子イコールは必ず `===` を用います

- ループに使う変数は、\$i, \$j, \$k のみ

- 式の途中での改行は禁止とさせていただきます
```php
return $a ?
        $b :
        $c;
// これはNG

return $a ? $b : $c;
// これはGood
```

#### クラス, メソッド, 関数

- クラスをインスタンス化する際は、引数がなくても()で閉じます
```php
$user = new User();
```

- クラス宣言やメソッド(関数)の `{` は独立した行に記述します
```php
class User
{
        // Good
}

public function hi()
{
        // Good
}
```

- メソッド(関数)の引数は、必ず型宣言を行う。また返り値の型宣言も行います
```php
public function double(int $int): int
{
        return $int * 2; 
}
```

- メソッド(関数)に複数の引数が存在する場合、引数一つにつき改行する(コメントのしやすさを優先)
```php
public function triangle(
        int $height,
        int $bottom,
): int
{
        return $height * $bottom / 2;
}
```

- 型宣言の一覧

| 型 | 説明 |
| ---- | ---- |
| クラスの名前 | 指定したクラスのインスタンス |
| self | そのメソッドが定義されているクラスと同じクラスのインスタンス。クラスの内部でのみ使えます。 |
| array | 配列 |
| callable | [callable](https://www.php.net/manual/ja/language.types.callable.php)。 クラスのプロパティの型では宣言できません。 |
| bool | bool値 |
| float | 浮動小数点 |
| int | 数値 |
| string | 文字列 |
| iterable | 配列か、[Traversable](https://www.php.net/manual/ja/class.traversable.php) のインスタンスでなければなりません。 |
| object | object |
| mixed | あらゆる値 |

その型でない場合は、TypeError がスローされます

 _[PHPマニュアル](https://www.php.net/manual/ja/language.types.declarations.php)から引用_

#### その他

- インデントの幅は半角スペース4個分とします

- 一行の長さは、最大120文字までとします

- ファイル一つにつきクラスは一つまでとします。また、クラスファイルでは必ず名前空間宣言をしてください

- ルートには必ず名前をつける

- URLの先頭の `/` は省略する

- /vendor配下のファイルやディレクトリは、コードの書き換えを行わないこと。触らない

- メソッド名が長くなりそうな時は `動詞 + 名詞` で行う
```php
public function getGreeting(): string
{
        return 'Hello!';
}
```
## - 参照

- [PSRの誤解 - Qiita](https://qiita.com/tadsan/items/942a381e952e12a8fa5a)
- [【laravel】laravelの命名規則 - Qiita](https://qiita.com/gone0021/items/e248c8b0ed3a9e6dbdee)
- [PHP: 制御構造 - Manual](https://www.php.net/manual/ja/language.control-structures.php)
- [命名規則について - Laravel学習帳](https://laraweb.net/knowledge/942/)
- [PSR-12：拡張コーディングスタイル-PHP-FIG](https://www.php-fig.org/psr/psr-12/)
- [命名規則に出てくるキャメルケースなどの種類 | yukimasablog](https://yukimasablog.com/notation)
- [Laravel 複数単語の命名規則について個人的まとめ（テーブル・モデル・URL） | 大分のITコンサルタント | 高橋商店](https://takahashi-it.com/php/laravel-plural-words/)
