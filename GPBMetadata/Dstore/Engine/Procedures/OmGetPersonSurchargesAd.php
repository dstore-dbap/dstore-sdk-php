<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPersonSurcharges_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class OmGetPersonSurchargesAd
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Dstore\Values::initOnce();
        \GPBMetadata\Dstore\Engine\Engine::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae30f0a386473746f72652f656e67696e652f70726f636564757265732f" .
            "6f6d5f476574506572736f6e537572636861726765735f41642e70726f74" .
            "6f12276473746f72652e656e67696e652e6f6d5f476574506572736f6e53" .
            "7572636861726765735f41641a136473746f72652f76616c7565732e7072" .
            "6f746f1a1a6473746f72652f656e67696e652f656e67696e652e70726f74" .
            "6f22b2040a0a506172616d657465727312330a0e706572736f6e5f747970" .
            "655f696418012001280b321b2e6473746f72652e76616c7565732e496e74" .
            "6567657256616c7565121c0a13706572736f6e5f747970655f69645f6e75" .
            "6c6c18e90720012808122e0a09706572736f6e5f696418022001280b321b" .
            "2e6473746f72652e76616c7565732e496e746567657256616c756512170a" .
            "0e706572736f6e5f69645f6e756c6c18ea072001280812310a0c74726565" .
            "5f6e6f64655f696418032001280b321b2e6473746f72652e76616c756573" .
            "2e496e746567657256616c7565121a0a11747265655f6e6f64655f69645f" .
            "6e756c6c18eb0720012808123e0a196f75747075745f6368617261637465" .
            "7269737469635f69643118042001280b321b2e6473746f72652e76616c75" .
            "65732e496e746567657256616c756512270a1e6f75747075745f63686172" .
            "616374657269737469635f6964315f6e756c6c18ec0720012808123e0a19" .
            "6f75747075745f63686172616374657269737469635f6964321805200128" .
            "0b321b2e6473746f72652e76616c7565732e496e746567657256616c7565" .
            "12270a1e6f75747075745f63686172616374657269737469635f6964325f" .
            "6e756c6c18ed0720012808123e0a196f75747075745f6368617261637465" .
            "7269737469635f69643318062001280b321b2e6473746f72652e76616c75" .
            "65732e496e746567657256616c756512270a1e6f75747075745f63686172" .
            "616374657269737469635f6964335f6e756c6c18ee072001280822b3090a" .
            "08526573706f6e736512380a106d6574615f696e666f726d6174696f6e18" .
            "022003280b321e2e6473746f72652e656e67696e652e4d657461496e666f" .
            "726d6174696f6e12270a076d65737361676518032003280b32162e647374" .
            "6f72652e656e67696e652e4d65737361676512420a03726f771804200328" .
            "0b32352e6473746f72652e656e67696e652e6f6d5f476574506572736f6e" .
            "537572636861726765735f41642e526573706f6e73652e526f771aff070a" .
            "03526f77120f0a06726f775f696418904e2001280512410a1c76616c7565" .
            "315f726573747269637465645f62795f7061747465726e18914e2001280b" .
            "321a2e6473746f72652e76616c7565732e537472696e6756616c75651241" .
            "0a1c76616c7565325f726573747269637465645f62795f7061747465726e" .
            "18924e2001280b321a2e6473746f72652e76616c7565732e537472696e67" .
            "56616c7565122e0a0872656c617469766518934e2001280b321b2e647374" .
            "6f72652e76616c7565732e426f6f6c65616e56616c7565122b0a0676616c" .
            "75653318944e2001280b321a2e6473746f72652e76616c7565732e537472" .
            "696e6756616c7565122b0a0676616c75653118954e2001280b321a2e6473" .
            "746f72652e76616c7565732e537472696e6756616c756512300a0b756e69" .
            "745f73796d626f6c18964e2001280b321a2e6473746f72652e76616c7565" .
            "732e537472696e6756616c7565122b0a0676616c75653218974e2001280b" .
            "321a2e6473746f72652e76616c7565732e537472696e6756616c75651235" .
            "0a0f7375726368617267655f76616c756518984e2001280b321b2e647374" .
            "6f72652e76616c7565732e446563696d616c56616c756512350a106e6f64" .
            "655f6465736372697074696f6e18994e2001280b321a2e6473746f72652e" .
            "76616c7565732e537472696e6756616c7565122c0a06616374697665189a" .
            "4e2001280b321b2e6473746f72652e76616c7565732e426f6f6c65616e56" .
            "616c7565122f0a09706572736f6e5f6964189b4e2001280b321b2e647374" .
            "6f72652e76616c7565732e496e746567657256616c7565122d0a07756e69" .
            "745f6964189c4e2001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c7565122c0a0662727574746f189d4e2001280b321b2e" .
            "6473746f72652e76616c7565732e426f6f6c65616e56616c756512320a0c" .
            "747265655f6e6f64655f6964189e4e2001280b321b2e6473746f72652e76" .
            "616c7565732e496e746567657256616c7565122d0a076e6f64655f696418" .
            "9f4e2001280b321b2e6473746f72652e76616c7565732e496e7465676572" .
            "56616c7565123f0a1a7375726368617267655f747970655f646573637269" .
            "7074696f6e18a04e2001280b321a2e6473746f72652e76616c7565732e53" .
            "7472696e6756616c756512370a117375726368617267655f747970655f69" .
            "6418a14e2001280b321b2e6473746f72652e76616c7565732e496e746567" .
            "657256616c756512410a1c76616c7565335f726573747269637465645f62" .
            "795f7061747465726e18a24e2001280b321a2e6473746f72652e76616c75" .
            "65732e537472696e6756616c7565122e0a086c6576656c5f696418a34e20" .
            "01280b321b2e6473746f72652e76616c7565732e496e746567657256616c" .
            "7565425a0a1b696f2e6473746f72652e656e67696e652e70726f63656475" .
            "7265735a3b676f73646b2e6473746f72652e64652f656e67696e652f7072" .
            "6f636564757265732f6f6d5f476574506572736f6e537572636861726765" .
            "735f4164620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

